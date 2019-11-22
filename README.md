# QR-Generator-Laravel
This application generates qr code using "simple-qrcode" composer package

- __composer create-project --prefer-dist laravel/laravel LaravelQR__  ( Create Project )

- __cd LaravelQR__

- __composer require simplesoftwareio/simple-qrcode__  ( Install simple-qrcode Package )


- Register Package
 
```
//config/app.php

        'providers' => [
         ….
         SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
         ],

        'aliases' => [
         ….
         'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
         ],

```

- Test QR Code
   
```
// web.php

    Route::get('qrcode', function () {
         return QrCode::size(300)->generate('A basic example of QR code!');
     });
     
```
