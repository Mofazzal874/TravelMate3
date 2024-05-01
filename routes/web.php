<?php


use Illuminate\Support\Facades\Route;
//frontend controllers 
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\DestinationDetailController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\TourController;
use App\Http\Controllers\Frontend\TourSingleController;


//backend controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutusController::class, 'index']);
Route::get('/tour', [TourController::class, 'index']);
Route::get('/tourSingle', [TourSingleController::class, 'index']);
Route::get('/destination',[DestinationController::class, 'index' ]);
Route::get('/destination-detail',[DestinationDetailController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/service-list', function () {
    return view('frontend.serviceList');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/contact', function () {
    return view('frontend.contactus');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog-detail', function () {
    return view('frontend.blogDetail');
});

Route::get('/test', function () {
    return view('frontend.test');
});




Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


//Normal User Routes list
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
});

//Admin Routes list
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});

//Manager Routes list
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('manager/dashboard', [DashboardController::class, 'managerDashboard'])->name('manager.dashboard');
});

//Tour Guide Routes list
Route::middleware(['auth', 'user-access:tourGuide'])->group(function () {
    Route::get('tourGuide/dashboard', [DashboardController::class, 'tourGuideDashboard'])->name('tourGuide.dashboard');
});
