<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95c28ce00c66f07dd124361b6fb3cd4e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95c28ce00c66f07dd124361b6fb3cd4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95c28ce00c66f07dd124361b6fb3cd4e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
