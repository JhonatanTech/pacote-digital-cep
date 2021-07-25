<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite63ea5e7427ce8f7044d230347c229ff
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wead\\DigitalCep\\' => 16,
        ),
        'J' => 
        array (
            'Jhonatan\\Php\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wead\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/..' . '/wead/digital-cep/src',
        ),
        'Jhonatan\\Php\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/..' . '/wead/digital-cep/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite63ea5e7427ce8f7044d230347c229ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite63ea5e7427ce8f7044d230347c229ff::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite63ea5e7427ce8f7044d230347c229ff::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite63ea5e7427ce8f7044d230347c229ff::$classMap;

        }, null, ClassLoader::class);
    }
}
