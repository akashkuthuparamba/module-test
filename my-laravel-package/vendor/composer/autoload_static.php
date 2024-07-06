<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63ca93a0a31278ffa9bd32af88a61f76
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Myvendor\\Modeltest\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Myvendor\\Modeltest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63ca93a0a31278ffa9bd32af88a61f76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63ca93a0a31278ffa9bd32af88a61f76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63ca93a0a31278ffa9bd32af88a61f76::$classMap;

        }, null, ClassLoader::class);
    }
}
