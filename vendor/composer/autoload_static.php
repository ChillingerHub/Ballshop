<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46d8ba809d09c4797aaabd2d2da43a04
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'stefan\\ball\\' => 12,
        ),
        'T' => 
        array (
            'TYPO3Fluid\\Fluid\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'stefan\\ball\\' => 
        array (
            0 => __DIR__ . '/..' . '/stefan/ball/src',
        ),
        'TYPO3Fluid\\Fluid\\' => 
        array (
            0 => __DIR__ . '/..' . '/typo3fluid/fluid/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46d8ba809d09c4797aaabd2d2da43a04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46d8ba809d09c4797aaabd2d2da43a04::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
