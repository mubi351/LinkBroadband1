<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\GoCardlessController;
use App\Http\Controllers\BusinessFormController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/form',[FormController::class,'index'])->name('form');
Route::post('/form/send',[FormController::class,'sendEmail']);
Route::post('/form/save',[FormController::class,'formSave'])->name('form_submit');
Route::post('form-store', [FormController::class,'formStore'])->name('form_store');


Route::post('/BroadbandformSubmit',[FormController::class,'BroadbandformSubmit'])->name('form.formSubmit');

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('/residential',[HomeController::class,'residential']);
Route::get('/business',[HomeController::class,'business']);
Route::get('/voice-residential',[HomeController::class,'voice_residential']);
Route::get('/voice-business',[HomeController::class,'voice_business']);
Route::get('/hardware',[HomeController::class,'hardware']);
Route::get('/faq',[HomeController::class,'faq']);
Route::get('/news',[HomeController::class,'news']);
Route::get('/broadbandform',[HomeController::class,'broadbandform'])->name('broadbandform');
Route::get('/about-us',[HomeController::class,'about_us']);
Route::get('/contact-us',[HomeController::class,'contact_us']);
Route::get('/privacy-policy',[HomeController::class,'privacy']);
Route::get('/tc-for-digital-phone-and-fibre-broadband',[HomeController::class,'tc_mob_dig']);
Route::get('/code-of-complaints',[HomeController::class,'code_of_complaints']);
Route::get('/terms-and-conditions',[HomeController::class,'tc']);


Route::get('/business-form',[BusinessFormController::class,'index'])->name('business-form');
Route::post('/Business-Broadband-form-Submit',[BusinessFormController::class,'formSubmit']);
Route::post('/contact/send',[HomeController::class,'save_contact'])->name('contact_save');


