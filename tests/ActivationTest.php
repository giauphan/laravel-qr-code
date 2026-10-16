<?php
require 'vendor/autoload.php';

try {
    $app = new \Illuminate\Container\Container();
    $provider = new \LaravelQRCode\Providers\QRCodeServiceProvider($app);
    $provider->register();

    if ($app->bound('qr-code')) {
        echo "Successfully activated and bound qr-code.\n";
        exit(0);
    } else {
        echo "Failed to bind qr-code.\n";
        exit(1);
    }
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
