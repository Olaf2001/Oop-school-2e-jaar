<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa057efc579fb3ed6281b989f699a67e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP_basis_Opdracht_5\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP_basis_Opdracht_5\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa057efc579fb3ed6281b989f699a67e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa057efc579fb3ed6281b989f699a67e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
