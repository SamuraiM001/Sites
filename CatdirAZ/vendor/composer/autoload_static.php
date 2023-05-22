<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf487f993cd09b7044cbdfb3176f9ae57
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf487f993cd09b7044cbdfb3176f9ae57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf487f993cd09b7044cbdfb3176f9ae57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf487f993cd09b7044cbdfb3176f9ae57::$classMap;

        }, null, ClassLoader::class);
    }
}
