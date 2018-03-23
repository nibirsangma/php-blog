<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e0fa9430f9c93813b4b60773d462ba9
{
    public static $classMap = array (
        'AdminController' => __DIR__ . '/../..' . '/controller/AdminController.php',
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit6e0fa9430f9c93813b4b60773d462ba9' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit6e0fa9430f9c93813b4b60773d462ba9' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'GalleryController' => __DIR__ . '/../..' . '/controller/GalleryController.php',
        'PagesController' => __DIR__ . '/../..' . '/controller/PagesController.php',
        'PostsController' => __DIR__ . '/../..' . '/controller/PostsController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'TasksController' => __DIR__ . '/../..' . '/controller/TasksController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6e0fa9430f9c93813b4b60773d462ba9::$classMap;

        }, null, ClassLoader::class);
    }
}
