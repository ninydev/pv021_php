<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita429af0b26d5152c611d49d5e0f40a8d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pv021\\' => 6,
        ),
        'N' => 
        array (
            'Niny\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pv021\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Pv021',
        ),
        'Niny\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Niny',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita429af0b26d5152c611d49d5e0f40a8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita429af0b26d5152c611d49d5e0f40a8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita429af0b26d5152c611d49d5e0f40a8d::$classMap;

        }, null, ClassLoader::class);
    }
}
