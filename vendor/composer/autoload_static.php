<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50d094cadb0439e2ddfa270ebf3e17e8
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JAK8583' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit50d094cadb0439e2ddfa270ebf3e17e8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
