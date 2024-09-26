# Laravel QR Code Generator

 Create QR Codes with Laravel

 This is a wrapper for [QR Code Generator for PHP], a standalone library to generate QR Codes in PNG and SVG.

## Installation

 Install using **composer**:

 ```bash
composer require giauphan/laravel-qr-code:v1.0.2
 ```
##### Laravel 5.4 (5.5+ can skip this step)
 
 You need to add provider and alias to your `config/app.php` file:
 
 ```php
 <?php
 
 'providers' => [     
       
     LaravelQRCode\Providers\QRCodeServiceProvider::class,     
   
 ],

 
 'aliases' => [
    
    'QRCode' => LaravelQRCode\Facades\QRCode::class,     
       
 ] 
 ```
## QR Code Types

 Laravel QR Code Generator supports the following QR Codes:

  - Calendar Event
  - Email Message
  - Phone
  - SMS
  - Text
  - URL
  - meCard
  - vCard v3
  - Wi-fi Network Settings
  
## Usage
    
  ```php
  <?php
  
  Route::get('qr-code', function () {
    $path = public_path().'/qr-code.png';
    $filename = '/qr-code.png';
    QRCode::text('QR Code Generator for Laravel!')
        ->setOutfile($path )
        ->png();
    return '<img src=' . $filename . '>';
  });
  
  ```
  The above route should print a PNG image for a text QR Code.
  
   
## [Contributing](CONTRIBUTING.md)
 
 To contribute to this project, please do the following:
 
  - Fork it
  - Create a new branch for your contribution
  - Test it! Make sure it works and it won't break the master code
  - Send pull request

  

