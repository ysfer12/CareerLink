<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d7f4f31063fe9da3bcfc0ae665e3a66
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youcode\\CarrerLink\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youcode\\CarrerLink\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d7f4f31063fe9da3bcfc0ae665e3a66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d7f4f31063fe9da3bcfc0ae665e3a66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d7f4f31063fe9da3bcfc0ae665e3a66::$classMap;

        }, null, ClassLoader::class);
    }
}