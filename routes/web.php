<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//frontend controllers 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourGuideController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;




//backend controllers
use App\Http\Controllers\Frontend\TourController;
use App\Http\Controllers\Frontend\AboutusController;

//admin page controllers
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\TourSingleController;

use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\ContactAdminController;
use App\Http\Controllers\Frontend\DestinationDetailController;

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

Route::get('bestDestination/tour', [TourController::class, 'bestDestination'])->name('bestDestination.tour');
Route::get('generalDestination/tour', [TourController::class, 'generalDestination'])->name('generalDestination.tour');
Route::get('/tourSingle/{id}', [TourSingleController::class, 'index'])->name('tourSingle');
Route::get('/destination',[DestinationController::class, 'index' ]);
Route::get('/destination-detail',[DestinationDetailController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);

// all about TourGuide
Route::get('/tourGuideSingle/{id}', [TourGuideController::class, 'tourGuideProfile'])->name('tourGuideSingle');



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

Route::get('/contact', function () { return view('frontend.contactus'); });
//send message to admin (both user and unregistered user can send message)
Route::post('/send-message', [ContactAdminController::class, 'sendMessage'])->name('send.message');

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
    Route::get('admin/dashboard/edit/{id}', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
    Route::put('admin/dashboard/edit/{id}', [AdminController::class, 'UpdateProfile'])->name('admin.profile.update');
    
    Route::get('admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::delete('admin/messages/delete/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');

    Route::get('admin/places' , [PlacesController::class , 'index'])->name('admin.places') ;
    Route::get('admin/places/create' , [PlacesController::class , 'create'])->name('admin.places.create') ;  //C -Create
    Route::post('admin/places/store' , [PlacesController::class , 'store'])->name('admin.places.store') ;    //S-Storing after creating..where to go after creating and storing will be defind in store method of PlacesController

    Route::get('admin/places/show/{id}' , [PlacesController::class , 'show'])->name('admin.places.show') ;  //R-Read
    Route::get('admin/places/edit/{id}' , [PlacesController::class , 'edit'])->name('admin.places.edit') ;   //U-Update

    Route::put('admin/places/edit/{id}' , [PlacesController::class , 'update'])->name('admin.places.update') ;//U-Update..Be careful with put method here

    Route::delete('admin/places/destroy/{id}' , [PlacesController::class , 'destroy'])->name('admin.places.destroy') ;  //D-Delete

    Route::get('admin/tourGuides', [AdminController::class, 'showTourGuides'])->name('admin.tourGuides');
    Route::get('admin/tourGuides/show/{id}', [AdminController::class, 'TourGuideDetails'])->name('admin.tourGuides.show');
    Route::delete('admin/tourGuides/destroy/{id}', [AdminController::class, 'deleteTourGuides'])->name('admin.tourGuides.destroy');

    
    Route::get('admin/updateRole', [AdminController::class, 'showUpdateRole'])->name('admin.updateRole');
    Route::post('admin/updateRole/{id}', [AdminController::class, 'updateRole'])->name('admin.updateRole.update'); 
    Route::delete('admin/updateRole/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.updateRole.destroy');
});

//Manager Routes list
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('manager/dashboard', [DashboardController::class, 'managerDashboard'])->name('manager.dashboard');
});

//Tour Guide Routes list
Route::middleware(['auth', 'user-access:tourGuide'])->group(function () {
    Route::get('tourGuide/dashboard', [DashboardController::class, 'tourGuideDashboard'])->name('tourGuide.dashboard');
});
