<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//frontend controllers 
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourGuideController;
use App\Http\Controllers\frontend\TGController;
use App\Http\Controllers\Frontend\BlogController;




//backend controllers
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;

//admin page controllers
use App\Http\Controllers\Frontend\TourController;
use App\Http\Controllers\Frontend\AboutusController;

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
Route::get('/about', [AboutusController::class, 'index'])->name('about');
Route::get('/userDetails/{id}', [AboutusController::class, 'userDetails'])->name('userDetails');

Route::get('/allDestination', [TourController::class, 'allDestination'])->name('allDestination');
Route::get('bestDestination/tour', [TourController::class, 'bestDestination'])->name('bestDestination.tour');
Route::get('generalDestination/tour', [TourController::class, 'generalDestination'])->name('generalDestination.tour');
Route::get('gallery/tour', [TourController::class, 'gallery'])->name('gallery.tour');
Route::get('topDestination/tour', [TourController::class, 'topDestination'])->name('topDestination.tour');

// Route::get('/contact', function () { return view('frontend.contactus'); });
Route::get('/contactus/{id}' , [ContactAdminController::class, 'sendMessage'])->name('sendMessageToAdmin');
//send message to admin (both user and unregistered user can send message)
Route::post('/contactus/submit', [ContactAdminController::class, 'submitMessageBtn'])->name('send.message');

//Destination Types routes
Route::get('/hiking', [TourController::class, 'hiking'])->name('hiking');
Route::get('/camping', [TourController::class, 'camping'])->name('camping');
Route::get('/trekking', [TourController::class, 'trekking'])->name('trekking');
Route::get('/adventure', [TourController::class, 'adventure'])->name('adventure');
Route::get('/wildlife', [TourController::class, 'wildlife'])->name('wildlife');

Route::get('/tourSingle/{id}', [TourSingleController::class, 'index'])->name('tourSingle');
Route::get('/destination',[DestinationController::class, 'index' ]);
Route::get('/destination-detail',[DestinationDetailController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);

// all about TourGuide
Route::get('/tourGuide', [TGController::class, 'index'])->name('tourGuide');
Route::get('/tourGuideSingle/{id}', [TGController::class, 'tourGuideProfile'])->name('tourGuideSingle');
Route::get('/tourGuides/place/{id}', [TGController::class, 'tourGuidesForAPlace'])->name('tourGuideForAPlace');

//eikhan theke mone hoy tourGuide middleware er kaj ta shuru kormu , bujhtachi na 
Route::get('tourGuide/booking/{id}', [TGController::class, 'bookTourGuide'])->name('bookTourGuide');
Route::post('tourGuide/storeForm/{id}', [TGController::class, 'submitBookingForm'])->name('tourGuide.storeForm'); //in the booking.blade.php file the form action is set to this route
Route::get('tourGuide/bookingForm/{id}', [TGController::class, 'showBookingForm'])->name('tourGuide.bookingForm');      //user can see their booking from the user dashboard with route
Route::put('tourGuide/updateForm/{id}', [TGController::class, 'updateBookingForm'])->name('tourGuide.updateForm'); //updating the booking data with this page using bookingStat.blade.php







// Route::get('/faq', function () {
//     return view('frontend.faq');
// });

// Route::get('/service', function () {
//     return view('frontend.service');
// });
// Route::get('/service-list', function () {
//     return view('frontend.serviceList');
// });
// Route::get('/blog', function () {
//     return view('frontend.blog');
// });
// Route::get('/blog-detail', function () {
//     return view('frontend.blogDetail');
// });


//tester route to check my working view
Route::get('/test', function () {
    return view('frontend.sendMessage');
});


// Universal Message Sending
Route::get('send-message/{id}', [TourGuideController::class, 'sendReply'])->name('sendMessagePage');
Route::post('send-message', [TourGuideController::class, 'universalMessageSending'])->name('universalMessageSending');


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
    Route::get('user/dashboard/edit/{id}', [UserController::class, 'editProfile'])->name('user.profile.edit');
    Route::put('user/dashboard/edit/{id}', [UserController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('user/messages', [UserController::class, 'messages'])->name('user.messages');
    Route::get('user/sendReply/{id}' , [TourGuideController::class , 'sendReply'])->name('user.messages.sendReply');
    Route::delete('user/messages/delete/{id}', [UserController::class, 'deleteMessage'])->name('user.messages.delete');

    Route::get('user/bookings', [UserController::class, 'bookings'])->name('user.bookings');
    Route::get('user/bookings/show/{id}', [UserController::class, 'bookingDetails'])->name('user.bookings.show');
    Route::delete('user/bookings/destroy/{id}', [UserController::class, 'deleteBooking'])->name('user.bookings.destroy');
    
});

//Admin Routes list
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
    Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('admin/dashboard/edit/{id}', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
    Route::put('admin/dashboard/edit/{id}', [AdminController::class, 'UpdateProfile'])->name('admin.profile.update');
    
    Route::get('admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::get('admin/sendReply/{id}' , [TourGuideController::class , 'sendReply'])->name('admin.messages.sendReply');
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
    Route::get('tourGuide/dashboard/edit/{id}', [TourGuideController::class, 'editProfile'])->name('tourGuide.profile.edit');
    Route::put('tourGuide/dashboard/edit/{id}', [TourGuideController::class, 'updateProfile'])->name('tourGuide.profile.update');

    Route::get('tourGuide/messages', [TourGuideController::class, 'messages'])->name('tourGuide.messages');
    Route::get('tourGuide/sendReply/{id}' , [TourGuideController::class , 'sendReply'])->name('tourGuide.messages.sendReply');
    Route::delete('tourGuide/messages/delete/{id}', [TourGuideController::class, 'deleteMessage'])->name('tourGuide.messages.delete');
    //places showing in tour guide dashboard
    // -------------------------------------


    //Booking & pricing Info ->
    Route::get('tourGuide/bookingAndPricing', [TourGuideController::class, 'bookingAndPricing'])->name('tourGuide.bookingAndPricing');
    Route::put('tourGuide/bookingAndPricing/edit/{id}', [TourGuideController::class, 'updateBookingAndPricing'])->name('tourGuide.bookingAndPricing.update');

    //Bookings showing in tour guide dashboard
    Route::get('tourGuide/bookings', [TourGuideController::class, 'bookings'])->name('tourGuide.bookings');
    Route::get('tourGuide/bookings/show/{id}', [TourGuideController::class, 'bookingDetails'])->name('tourGuide.bookings.show');
    Route::delete('tourGuide/bookings/destroy/{id}', [TourGuideController::class, 'deleteBooking'])->name('tourGuide.bookings.destroy');   //eikhane ekhono ghapla ache 
    //delete koira dile abar user re feedback pathanor mechanism banaite hoibo ..abar porshudin ct ache..bai bad de 

    //Pending bookings
    Route::get('tourGuide/pendingBookings' , [TourGuideController::class , 'showPendingBookings'])->name('tourGuide.pendingBookings');
    Route::post('tourGuide/pendingBookings/bookingStatus/update/{id}', [TourGuideController::class, 'updateBookingStatus'])->name('tourGuide.pendingBookings.bookingStatus.update');
    Route::get('tourGuide/pendingBookings/show/{id}' , [TourGuideController::class , 'bookingDetails'])->name('tourGuide.pendingBookings.show');
    Route::delete('tourGuide/pendingBookings/destroy/{id}' , [TourGuideController::class , 'deleteBooking'])->name('tourGuide.pendingBookings.destroy');

    //Confirmed bookings
    Route::get('tourGuide/confirmedBookings' , [TourGuideController::class , 'showConfirmedBookings'])->name('tourGuide.confirmedBookings');
    Route::post('tourGuide/confirmedBookings/bookingStatus/update/{id}' , [TourGuideController::class , 'updateBookingStatus'])->name('tourGuide.confirmedBookings.bookingStatus.update');
    Route::post('tourGuide/confirmedBookings/paymentStatus/update/{id}' , [TourGuideController::class , 'updatePaymentStatus'])->name('tourGuide.confirmedBookings.paymentStatus.update');
    Route::get('tourGuide/confirmedBookings/show/{id}' , [TourGuideController::class , 'bookingDetails'])->name('tourGuide.confirmedBookings.show');
});
