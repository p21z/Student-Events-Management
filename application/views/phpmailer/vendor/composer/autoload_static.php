<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit385dfca3807d530af38ea7b1774d704d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit385dfca3807d530af38ea7b1774d704d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit385dfca3807d530af38ea7b1774d704d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit385dfca3807d530af38ea7b1774d704d::$classMap;

        }, null, ClassLoader::class);
    }
}
