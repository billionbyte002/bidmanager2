<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\SkillSetsController;
use App\Http\Controllers\ClientStatsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BidPriceController;
use App\Http\Controllers\ProjectperiodController;
use App\Http\Controllers\TemplateCatController;
use App\Http\Controllers\FreelancerConnection;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TemplatesController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FreelancerOAuthController;


Route::get('/register', [AuthController::class, 'signup'])->name('pages.signup');
Route::post('/register', [AuthController::class, 'dosignup'])->name('pages.dosignup');

// Email Verification
Route::get('/verify-email', [AuthController::class, 'verifyEmailPage'])->name('verifyEmailPage');
Route::post('/verify-email', [AuthController::class, 'verifyEmailAction'])->name('verifyEmailAction');
Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->name('verifyEmail');


Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'dologin'])->name('pages.login');

Route::get('forgetpassword', [AuthController::class, 'forgetpasswordload'])->name('auth.forgetpasswordload');
Route::post('forgetpassword', [AuthController::class, 'forgetpassword'])->name('auth.forgetpassword');

Route::get('resetpassword', [AuthController::class, 'resetpasswordload'])->name('auth.resetpasswordload');
Route::post('resetpassword', [AuthController::class, 'resetpassword'])->name('auth.resetpassword');


Route::get('/', [HomeController::class, 'home'])->name('pages.home');
Route::get('features', [FeaturesController::class, 'index'])->name('pages.features');
Route::get('pricing', [PricingController::class, 'index'])->name('pages.pricing');
Route::get('contact', [ContactController::class, 'index'])->name('pages.contact');
Route::get('career', [CareerController::class, 'index'])->name('pages.career');
Route::get('faq', [FaqController::class, 'index'])->name('pages.faq');
Route::get('blogs', [BlogsController::class, 'index'])->name('pages.blogs');
Route::get('about', [AboutController::class, 'index'])->name('pages.about');
Route::get('join', [JoinController::class, 'index'])->name('pages.join');
Route::get('terms', [TermController::class, 'index'])->name('pages.terms');
Route::get('privacy', [PrivacyController::class, 'index'])->name('pages.privacy');

// Route::get('signup', [SignupController::class, 'index'])->name('pages.signup');

Route::group(['middleware' => ['freelancer.connection']], function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});


// For Admin
Route::group(['middleware' => AdminMiddleware::class, 'prefix' => '/admin'], function () {
        Route::get('/   /dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard1');

    Route::resource('user1', ManageUsersController::class);
    Route::resource('skillsets1', SkillSetsController::class);
    Route::get('/countries', function () {
        return view('admin.countries.index');
    })->name('countries1');
    Route::resource('client1', ClientStatsController::class);
    Route::resource('project1', ProjectController::class);
    Route::resource('period1', ProjectperiodController::class);
    Route::resource('templatecat1', TemplateCatController::class);
    Route::resource('templates1', TemplatesController::class);
    Route::resource('skill1', SkillsController::class);
    Route::resource('role1', RoleController::class);
    Route::resource('module1', ModuleController::class);
});


// For User


Route::group(['middleware' => UserMiddleware::class, 'prefix' => '/user'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard2');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::resource('user', UsersController::class);

    Route::resource('skillsets', SkillSetsController::class);
    // Route::get('/sync-skills', [SkillSetsController::class, 'fetchSkills'])->name('skillsets.fetch');

    Route::get('/countries', [CountryController::class, 'manageExcludedCountries'])->name('countries');
    Route::post('/countries', [CountryController::class, 'updateCountires'])->name('updateCountires');
    Route::resource('client', ClientStatsController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('bidprice', BidPriceController::class);
    Route::resource('period', ProjectperiodController::class);
    Route::resource('templatecat', TemplateCatController::class);
    Route::post('/templates/update-position', [TemplateCatController::class, 'updatePosition'])->name('templates.update-position');

    Route::resource('templates', TemplatesController::class);
    Route::get('skills', [SkillsController::class, 'index'])->name('skills.index');
    Route::get('/sync-skills', [SkillsController::class, 'fetchSkills'])->name('skills.fetch');

    Route::resource('role', RoleController::class);
    Route::resource('module', ModuleController::class);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/account-delete', [UsersController::class, 'deleteAccount'])->name('account.delete');

    Route::get('/freelancer-connection', [FreelancerConnection::class, 'index'])->name('freelancer.connection');
    // Route::post('/freelancer-connection', [FreelancerConnection::class, 'store'])->name('save.freelancer.token');


    Route::get('/freelancer/connect', [FreelancerOAuthController::class, 'redirectToFreelancer'])
    ->name('freelancer.redirect');

Route::get('/freelancer/callback', [FreelancerOAuthController::class, 'handleCallback'])
    ->name('freelancer.callback');
});
