<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1123e376391f17eb021280259030bcdc
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QrCodeReader\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QrCodeReader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1123e376391f17eb021280259030bcdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1123e376391f17eb021280259030bcdc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1123e376391f17eb021280259030bcdc::$classMap;

        }, null, ClassLoader::class);
    }
}