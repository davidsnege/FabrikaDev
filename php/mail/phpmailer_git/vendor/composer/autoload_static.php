<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadb40bcd95c0b0e6601983a5fc8fd65e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadb40bcd95c0b0e6601983a5fc8fd65e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadb40bcd95c0b0e6601983a5fc8fd65e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
