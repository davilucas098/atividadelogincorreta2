<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited802b74ceae15f0f935140ac760741a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInited802b74ceae15f0f935140ac760741a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited802b74ceae15f0f935140ac760741a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited802b74ceae15f0f935140ac760741a::$classMap;

        }, null, ClassLoader::class);
    }
}
