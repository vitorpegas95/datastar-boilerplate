<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f283fe3b15275ecb02063ae363c0f98
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'starfederation\\datastar\\' => 24,
        ),
        'V' => 
        array (
            'Vitor\\Datastar\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'starfederation\\datastar\\' => 
        array (
            0 => __DIR__ . '/..' . '/starfederation/datastar-php/src',
        ),
        'Vitor\\Datastar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f283fe3b15275ecb02063ae363c0f98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f283fe3b15275ecb02063ae363c0f98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f283fe3b15275ecb02063ae363c0f98::$classMap;

        }, null, ClassLoader::class);
    }
}
