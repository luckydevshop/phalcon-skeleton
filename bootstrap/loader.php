<?php

    $loader = new \Phalcon\Loader();
    
    $loader->registerDirs(
        array(
            $config->app->controllersDir,
            $config->app->modelsDir,
            $config->app->vendorDir
        )
    );

    $loader->register();
