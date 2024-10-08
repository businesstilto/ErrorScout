<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3adce9c23c5f5033b8bb4d329368de79
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tilto\\Errorscout\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tilto\\Errorscout\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3adce9c23c5f5033b8bb4d329368de79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3adce9c23c5f5033b8bb4d329368de79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3adce9c23c5f5033b8bb4d329368de79::$classMap;

        }, null, ClassLoader::class);
    }
}
