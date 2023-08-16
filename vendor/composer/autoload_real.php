<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd1f3d66dc57b7a3a39eb73245e73d5fe
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd1f3d66dc57b7a3a39eb73245e73d5fe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd1f3d66dc57b7a3a39eb73245e73d5fe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd1f3d66dc57b7a3a39eb73245e73d5fe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
