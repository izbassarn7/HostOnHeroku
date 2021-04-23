<?php

use Illuminate\Support\Facades\Route;

Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');
//BLADE FILES(localization)
Route::middleware(['set_locale'])->group(function (){
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/home', function () {
        return view('index');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/services', function () {
        return view('services');
    });
    Route::get('/appointment', function () {
        return view('appointment');
    });
    Route::get('/barbers', function () {
        return view('barbers');
    });
});
//UPLOADING FILES
Route::get('/multiuploads', 'App\Http\Controllers\UploadController@uploadForm');
Route::post('/multiuploads', 'App\Http\Controllers\UploadController@uploadSubmit');
//MAIL-SEND 1
Route::get('mail/send', 'App\Http\Controllers\MailController@send');

//MAIL-SEND 2
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'showForm']);
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeForm'])->name('contact.save');
