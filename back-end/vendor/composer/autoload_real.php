<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3c00a85e972e9ed402e80aaceda69be8
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

        spl_autoload_register(array('ComposerAutoloaderInit3c00a85e972e9ed402e80aaceda69be8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3c00a85e972e9ed402e80aaceda69be8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3c00a85e972e9ed402e80aaceda69be8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
