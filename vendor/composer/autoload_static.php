<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4d1016cfbfc548fc9f1275a2706c10b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4d1016cfbfc548fc9f1275a2706c10b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4d1016cfbfc548fc9f1275a2706c10b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}