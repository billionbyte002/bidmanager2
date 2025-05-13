namespace App\Services;

use Illuminate\Support\Facades\Auth;

class FreelancerService
{
    public static function getAuthToken()
    {
        return Auth::user() ? Auth::user()->freelancer_access_token : null;
    }
}
