<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\RoleModulePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\ChangePassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail; // Keep this import only


class AuthController extends Controller
{
    public function signup()
    {
        return view('pages.signup');
    }

    public function verifyEmailPage()
    {
        return view('auth.verify-email'); // Ensure the file exists at resources/views/auth/verify-email.blade.php
    }

    public function verifyEmailAction(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }

        $verificationLink = URL::temporarySignedRoute(
            'verifyEmail',
            Carbon::now()->addMinutes(60 * 24), // Link valid for 24 hours
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        $mailData = [
            'full_name' => $user->name,
            'verification_link' => $verificationLink,
        ];

        try {
            Mail::send('auth.emails.verification-mail', $mailData, function ($message) use ($user) {
                $message->to($user->email)->subject('Verify your email address');
            });

            return back()->with('success', 'Verification email sent successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Failed to send verification email.']);
        }
    }


    public function dosignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pages.signup')
                            ->withErrors($validator)
                            ->withInput();
        }

        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
        ]);

        // Generate the email verification link
        $verificationLink = URL::temporarySignedRoute(
            'verifyEmail', // Name of the route for email verification
            Carbon::now()->addMinutes(60 * 24), // Link valid for 24 hours
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        // Email data
        $mailData = [
            'full_name' => $user->name,
            'verification_link' => $verificationLink,
        ];

        // Send the verification email
        try {
            Mail::send('auth.emails.verification-mail', $mailData, function ($message) use ($user) {
                $message->to($user->email)->subject('Verify your email address');
            });

            return redirect()->route('verifyEmailPage')->with('success', 'Account created successfully. Please verify your email.');
        } catch (\Exception $e) {
            return redirect()->route('pages.signup')->withErrors(['email' => 'Failed to send verification email.'])->withInput();
        }
    }



    public function verifyEmail($id, $hash)
    {
        $user = User::findOrFail($id);

        if (!hash_equals((string) $hash, sha1($user->email))) {
            return redirect()->route('verifyEmailPage')->withErrors(['email' => 'Invalid or expired verification link.']);
        }

        if ($user->email_verified_at) {
            return redirect()->route('verifyEmailPage')->with('success', 'Email already verified.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('verifyEmailPage')->with('success', 'Email verified successfully.');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }

        $resetLink = URL::temporarySignedRoute(
            'resetPassword',
            Carbon::now()->addMinutes(60), // Valid for 1 hour
            ['id' => $user->id]
        );

        $mailData = [
            'email' => $user->email,
            'title' => 'Password Reset Request',
            'reset_link' => $resetLink,
        ];

        try {
            Mail::send('auth.emails.forget-password', ['data' => $mailData], function ($message) use ($mailData) {
                $message->to($mailData['email'])->subject($mailData['title']);
            });

            return back()->with('success', 'Password reset email sent successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Failed to send password reset email.']);
        }
    }

    /**
     * Test mail functionality (for debugging).
     */
    public function testMail()
    {
        try {
            Mail::raw('This is a test email.', function ($message) {
                $message->to('your_email@example.com')->subject('Test Email');
            });

            return 'Test email sent successfully.';
        } catch (\Exception $e) {
            return 'Failed to send test email: ' . $e->getMessage();
        }
    }

    public function login()
    {
        // $token ='DjFUmk5d81RP0q7nWHpBbieHJrpLM7';
        // $response = Http::withHeaders([
        // 'freelancer-oauth-v1' =>  $token,
        // ])->get('https://api.freelancer.com/skills');
        // if ($response->successful()) {
        //     $data = $response->json();
        //     // echo "<pre>";
        //     // print_r($data);
        // } else {
        //     $error = $response->body();
        //     // print_r($error);
        // }
        //     
        
        return view('pages.login');
    }

    public function dologin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            // ✅ Store only freelancer access token
            // dd($user->freelancer_access_token);
            Session::put('freelancer_access_token', $user->freelancer_access_token);
            // dd(session('freelancer_access_token'));
            // Redirect based on user type
            if ($user->user_type === 'ADMIN') {
                return redirect()->route('dashboard1')->with('message', 'Login successful!');
            } elseif ($user->user_type === 'USER') {
                return redirect()->route('freelancer.connection')->with('message', 'Login successful!');
            }
        }

        return redirect()->route('auth.login')->withErrors(['message' => 'Invalid credentials.'])->withInput();
    }


    protected function authenticated($user)
    {
        $roleModulePermission = RoleModulePermission::where(['role_id' => $user->role_id])->pluck('module_permission_name');
        Session::put('permissions', $roleModulePermission);
        Session::put('role_id', $user->role_id);
        Session::put('freelancer_id', $user->freelancer_id);
        Session::put('freelancer_username', $user->freelancer_username);
        Session::put('freelancer_access_token', $user->freelancer_access_token);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with('message', 'Logged out successfully!');
    }

    public function forgetpasswordload()
    {
        return view('chngpassword.index');
    }

    public function forgetpassword(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if ($user) {
                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain.'/resetpassword?token='.$token;

                $data['url'] = $url;
                $data['email'] = $request->email;
                $data['title'] = 'Password Reset';
                $data['body'] = 'Please click on below link to reset your password.';

                // Mail::send('chngpassword.forgetpasswordmail', ['data' => $data], function($message) use ($data) {
                //     $message->to($data['email'])->subject($data['title']);
                // });

                ChangePassword::updateOrCreate(
                    ['email' => $request->email],
                    ['email' => $request->email, 'token' => $token]
                );

                return back()->with('success', 'Please check your mail to reset your password');
            } else {
                return back()->with('error', 'Email does not exist!');
            }
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function resetpasswordload(Request $request)
    {
        $resetData = ChangePassword::where('token', $request->token)->first();

        if ($resetData) {
            $user = User::where('email', $resetData->email)->first();
            if ($user) {
                return view('chngpassword.create', compact('user'));
            }
        }
        return view('chngpassword.404');

    }

    public function resetpassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::find($request->id);
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            ChangePassword::where('email', $user->email)->delete();

            return "<h2>Your Password has been reset successfully</h2>";
        } else {
            return "<h2>User not found</h2>";
        }
    }

}