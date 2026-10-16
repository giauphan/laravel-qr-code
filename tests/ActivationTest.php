<?php
use Orchestra\Testbench\TestCase;

class ActivationTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \LaravelQRCode\Providers\QRCodeServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'QRCode' => \LaravelQRCode\Facades\QRCode::class,
        ];
    }

    public function test_service_provider_binds_qr_code()
    {
        $this->assertTrue($this->app->bound('qr-code'));
        $this->assertInstanceOf(\LaravelQRCode\QRCodeFactory::class, $this->app->make('qr-code'));
    }
}
