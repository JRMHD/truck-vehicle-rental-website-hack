<?php


// Import the UserController class
use App\Http\Controllers\DocumentSubmissionController;
use App\Http\Controllers\NewSubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkusController;
use App\Http\Controllers\JourneyController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\VehicleController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\RentSubmissionController;
use App\Http\Controllers\JourneyPlanController;
use App\Http\Controllers\FormController;




Route::get('/testroute', function () {
    $name[] = "Funny Coder";
    // $data="";

    // The email sending is done using the to method on the Mail facade
    Mail::to('cgreen@hacksolutionsusa.com')->send(new MyTestEmail($name));
});

// Display the form
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Handle form submission
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// routes/web.php
Route::post('/contact', 'ContactController@sendEmail')->name('contact.send');
Route::post('/contact1', [ContactController::class, 'sendEmail'])->name('contact.send1');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');


Route::get('/work', [WorkusController::class, 'showForm'])->name('showForm');
Route::post('/work', [WorkusController::class, 'storeForm'])->name('storeForm');

Route::get('/vehicle/form', [VehicleController::class, 'showForm'])->name('vehicle.form');
Route::post('/vehicle/form', [VehicleController::class, 'store']);
Route::view('/vehicle-search-submitted', 'vehicle-search-submitted')->name('vehicle.search.submitted');

Route::post('/plan-journey', [JourneyController::class, 'plan'])->name('plan.journey')->middleware('auth');
Route::view('/journey-submitted', 'journey-submitted')->name('journey.submitted');
Route::resource('posts', PostController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']); // This route remains the same
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');




Route::post('/store-booking', [BookingController::class, 'storeBooking'])->name('store.booking');
Route::get('/success', [BookingController::class, 'success'])->name('success');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::post('/rent-submission', [RentSubmissionController::class, 'store'])->name('rent.submission');
Route::post('/plan-journey', [JourneyPlanController::class, 'store'])->name('plan.journey')->middleware('auth');

Route::post('/submit-form', [FormController::class, 'store'])->name('submitForm');

Route::post('/subscribe', [NewSubscriptionController::class, 'store'])->name('subscribe.store');

Route::post('/document-submission', [DocumentSubmissionController::class, 'store'])->name('document-submission.store');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/boxtrucks', function () {
    return view('boxtrucks');
});
Route::get('/suvs', function () {
    return view('suvs');
});
Route::get('/sedans', function () {
    return view('sedans');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
