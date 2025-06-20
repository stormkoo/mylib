<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5e07c7adceebdda8068128331af8b3a
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/utils',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5e07c7adceebdda8068128331af8b3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5e07c7adceebdda8068128331af8b3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5e07c7adceebdda8068128331af8b3a::$classMap;

        }, null, ClassLoader::class);
    }
}
