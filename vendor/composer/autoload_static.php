<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3851169d2eb54ba52fa64749734c71ca
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3851169d2eb54ba52fa64749734c71ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3851169d2eb54ba52fa64749734c71ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3851169d2eb54ba52fa64749734c71ca::$classMap;

        }, null, ClassLoader::class);
    }
}
