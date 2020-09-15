<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc48c6a9056530b1588a4fbeb1130e16f
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'elevenstack\\expressphp\\' => 23,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'elevenstack\\expressphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/elevenstack/expressphp/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc48c6a9056530b1588a4fbeb1130e16f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc48c6a9056530b1588a4fbeb1130e16f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
