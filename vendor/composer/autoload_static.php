<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb48cc1375cb73698433042ea7b651c49
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jamshidbekakhlidinov\\InstagramApi\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jamshidbekakhlidinov\\InstagramApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb48cc1375cb73698433042ea7b651c49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb48cc1375cb73698433042ea7b651c49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb48cc1375cb73698433042ea7b651c49::$classMap;

        }, null, ClassLoader::class);
    }
}