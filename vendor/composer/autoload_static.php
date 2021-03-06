<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit046d145a9d5853ad21ef96e3278f658f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit046d145a9d5853ad21ef96e3278f658f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit046d145a9d5853ad21ef96e3278f658f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit046d145a9d5853ad21ef96e3278f658f::$classMap;

        }, null, ClassLoader::class);
    }
}
