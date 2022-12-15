<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3afa0cd4521e0e2933d49c451579bca
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Extendify\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Extendify\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3afa0cd4521e0e2933d49c451579bca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3afa0cd4521e0e2933d49c451579bca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
