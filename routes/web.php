<?php

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
// ****************************************************************************************************

// save image in project directory path -> "public/images"
Route::get('qr-code-g', function () {
    QrCode::size(300)
        ->format('png')
        ->generate('A simple example of QR code', public_path('images/qrcode.png'));
    return view('qrCode');
});
// ****************************************************************************************************

// QR code with color
Route::get('qrcode-with-color', function () {
    return \QrCode::size(300)
        ->backgroundColor(255, 202, 51)
        ->generate('A simple example of QR code');
});

// ****************************************************************************************************

// QR Code with Image
Route::get('qrcode-with-image', function () {
    $image = \QrCode::format('png')
        ->merge('images/laravel.png', 0.5, true)
        ->size(300)->errorCorrection('H')
        ->generate('A simple example of QR code!');
    return response($image)->header('Content-type', 'image/png');
});

// ****************************************************************************************************

// Email QR code
Route::get('qrcode-with-special-data', function () {
    return \QrCode::size(300)
        ->email('admin@4qualia.co.jp', 'Welcome from 4Qualia!', 'This is !.');
});

// ****************************************************************************************************

// QR Code Phone Number
Route::get('qrcode-with-phone', function () {
    return \QrCode::size(300)->phoneNumber('111-222-6666');

});

// ****************************************************************************************************

// QR Code Text Message
Route::get('qrcode-with-textMsg', function () {
    return \QrCode::size(300)->SMS('111-222-6666', 'Body of the message');
});

// ****************************************************************************************************
