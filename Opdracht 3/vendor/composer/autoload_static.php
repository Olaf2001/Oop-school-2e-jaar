<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6c831ed49db383bfe21bfac9cdd6ae2
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP_basis\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP_basis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6c831ed49db383bfe21bfac9cdd6ae2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6c831ed49db383bfe21bfac9cdd6ae2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
