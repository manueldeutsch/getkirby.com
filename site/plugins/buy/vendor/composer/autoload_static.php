<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaxMind\\Db\\' => 11,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'B' => 
        array (
            'Buy\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Buy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Buy\\Paddle' => __DIR__ . '/../..' . '/src/Paddle.php',
        'Buy\\Passthrough' => __DIR__ . '/../..' . '/src/Passthrough.php',
        'Buy\\Price' => __DIR__ . '/../..' . '/src/Price.php',
        'Buy\\Product' => __DIR__ . '/../..' . '/src/Product.php',
        'Buy\\RevenueLimit' => __DIR__ . '/../..' . '/src/RevenueLimit.php',
        'Buy\\Sale' => __DIR__ . '/../..' . '/src/Sale.php',
        'Buy\\Upgrade' => __DIR__ . '/../..' . '/src/Upgrade.php',
        'Buy\\Visitor' => __DIR__ . '/../..' . '/src/Visitor.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'MaxMind\\Db\\Reader' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader.php',
        'MaxMind\\Db\\Reader\\Decoder' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
        'MaxMind\\Db\\Reader\\InvalidDatabaseException' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
        'MaxMind\\Db\\Reader\\Metadata' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
        'MaxMind\\Db\\Reader\\Util' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita859f2d2dfe8ca8f08832a211f59fd27::$classMap;

        }, null, ClassLoader::class);
    }
}
