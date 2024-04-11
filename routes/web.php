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

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('patient-info', function () {
    return view('patient-info');
})->name('patient-info');

Route::get('video-gallery', function () {
    return view('video-gallery');
})->name('video-gallery');

Route::get('images-gallery', function () {
    return view('images-gallery');
})->name('images-gallery');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('career', function () {
    return view('career');
})->name('career');

Route::get('blog', function () {
    return view('blog');
})->name('blog');







// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');