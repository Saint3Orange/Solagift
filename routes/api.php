<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/contact/price', [ContactController::class,'index']);
Route::get('/contact/phone', [ContactController::class,'showView']);
Route::post('/contact/price/send', [ContactController::class,'send'])->name('send_mail_price');
Route::post('/contact/phone/send', [ContactController::class,'store'])->name('send_mail_phone');
