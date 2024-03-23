<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('about-us', function () {
    return view('about');
})->name('about');


Route::get('cources/diploma-trichologist', function () {
    return view('diploma-trichologist');
})->name('diploma-trichologist');

Route::get('cources/certificate-courses-trichologist', function () {
    return view('certificate-courses-trichologist');
})->name('certificate-courses-trichologist');


Route::get('cources/diploma-cosmetology', function () {
    return view('diploma-cosmetology');
})->name('diploma-cosmetology');


Route::get('cources/certificate-course-in-cosmetology', function () {
    return view('certificate-course-in-cosmetology');
})->name('certificate-course-in-cosmetology');

Route::get('admission', function () {
    return view('admission');
})->name('admission');

Route::get('workshop', function () {
    return view('workshop');
})->name('workshop');

Route::get('new-header', function () {
    return view('new-header');
})->name('new-header');

Route::get('certification', function () {
    return view('certification');
})->name('certification');

Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');