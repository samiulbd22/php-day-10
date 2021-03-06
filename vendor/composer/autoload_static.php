<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit929e0938f19a1233de82728209e880b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit929e0938f19a1233de82728209e880b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit929e0938f19a1233de82728209e880b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit929e0938f19a1233de82728209e880b6::$classMap;

        }, null, ClassLoader::class);
    }
}
