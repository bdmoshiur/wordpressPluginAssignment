<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita96b546d7327f08205ddcfd1f6db4bc6
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ubrp\\Book\\Review\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ubrp\\Book\\Review\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita96b546d7327f08205ddcfd1f6db4bc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita96b546d7327f08205ddcfd1f6db4bc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita96b546d7327f08205ddcfd1f6db4bc6::$classMap;

        }, null, ClassLoader::class);
    }
}
