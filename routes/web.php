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

Route::get('hair-treatment/computerized-hair-analysis', function () {
    return view('computerized-hair-analysis');
})->name('computerized-hair-analysis');

Route::get('hair-treatment/alopecia-areata-treatment', function () {
    return view('alopecia-areata-treatment');
})->name('alopecia-areata-treatment');

Route::get('hair-treatment/hair-mesotherapy', function () {
    return view('hair-mesotherapy');
})->name('hair-mesotherapy');

Route::get('hair-treatment/platelet-rich-plasma-therapy-prp', function () {
    return view('platelet-rich-plasma-therapy-prp');
})->name('platelet-rich-plasma-therapy-prp');

Route::get('hair-treatment/laser-hair-grow', function () {
    return view('laser-hair-grow');
})->name('laser-hair-grow');

Route::get('hair-treatment/scalp-micropigmentation', function () {
    return view('scalp-micropigmentation');
})->name('scalp-micropigmentation');

Route::get('hair-treatment/hair-transplantation', function () {
    return view('hair-transplantation');
})->name('hair-transplantation');

Route::get('hair-treatment/growth-factor-concentrate', function () {
    return view('growth-factor-concentrate');
})->name('growth-factor-concentrate');

Route::get('eye-treatment/dark-circle-treatment', function () {
    return view('dark-circle-treatment');
})->name('dark-circle-treatment');

Route::get('eye-treatment/laser-eye-wrinkle-treatment', function () {
    return view('eye-wrinkle-treatment');
})->name('eye-wrinkle-treatment');

Route::get('eye-treatment/eye-bag-correction', function () {
    return view('eye-bag-correction');
})->name('eye-bag-correction');

Route::get('eye-treatment/blepharoplasty', function () {
    return view('blepharoplasty');
})->name('blepharoplasty');

Route::get('eye-treatment/crows-feet', function () {
    return view('crows-feet');
})->name('crows-feet');

Route::get('body-treatment/body-shaping-sculpting-treatment', function () {
    return view('body-shaping-sculpting-treatment');
})->name('body-shaping-sculpting-treatment');

Route::get('body-treatment/liposuction', function () {
    return view('liposuction');
})->name('liposuction');

Route::get('body-treatment/body-contouring-surgery', function () {
    return view('body-contouring-surgery');
})->name('body-contouring-surgery');

Route::get('body-treatment/fat-transfer-grafting-surgery', function () {
    return view('fat-transfer-grafting-surgery');
})->name('fat-transfer-grafting-surgery');

Route::get('body-treatment/stretch-mark-removal', function () {
    return view('stretch-mark-removal');
})->name('stretch-mark-removal');

Route::get('cosmetic-dermatology-treatment/laser-hair-removal', function () {
    return view('laser-hair-removal');
})->name('laser-hair-removal');

Route::get('cosmetic-dermatology-treatment/skin-brightening', function () {
    return view('skin-brightening');
})->name('skin-brightening');

Route::get('cosmetic-dermatology-treatment/laser-tattoo-removal', function () {
    return view('laser-tattoo-removal');
})->name('laser-tattoo-removal');

Route::get('cosmetic-dermatology-treatment/moles-skin-tag-removal', function () {
    return view('moles-skin-tag-removal');
})->name('moles-skin-tag-removal');

Route::get('cosmetic-dermatology-treatment/botox', function () {
    return view('botox');
})->name('botox');

Route::get('skin-treatment/super-specialty-dermatologyt', function () {
    return view('super-specialty-dermatology');
})->name('super-specialty-dermatology');

Route::get('skin-treatment/vitiligo', function () {
    return view('vitiligo');
})->name('vitiligo');

Route::get('skin-treatment/acne-scars-pigmentation', function () {
    return view('acne-scars-pigmentation');
})->name('acne-scars-pigmentation');

Route::get('skin-treatment/warts', function () {
    return view('warts');
})->name('warts');

Route::get('anti-angeing/3d-face-lift', function () {
    return view('3d-face-lift');
})->name('3d-face-lift');

Route::get('anti-angeing/skin-tightening-medifacial', function () {
    return view('skin-tightening-medifacial');
})->name('skin-tightening-medifacial');

Route::get('anti-angeing/hifu', function () {
    return view('hifu');
})->name('hifu');

Route::get('anti-angeing/ultherapy', function () {
    return view('ultherapy');
})->name('ultherapy');


// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');