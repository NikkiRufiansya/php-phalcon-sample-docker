<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d76b9baaceb0a4dc0cf1bb4dce212c6
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nikki\\PhalconSample\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nikki\\PhalconSample\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phalcon' => 
            array (
                0 => __DIR__ . '/..' . '/phalcon/devtools/scripts',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d76b9baaceb0a4dc0cf1bb4dce212c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d76b9baaceb0a4dc0cf1bb4dce212c6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5d76b9baaceb0a4dc0cf1bb4dce212c6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5d76b9baaceb0a4dc0cf1bb4dce212c6::$classMap;

        }, null, ClassLoader::class);
    }
}
