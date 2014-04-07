<?php

    use Phalcon\DI\FactoryDefault;
    use Phalcon\Mvc\View;
    use Phalcon\Mvc\Dispatcher;
    use Phalcon\Mvc\Url as UrlResolver;
    use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
    use Phalcon\Session\Adapter\Files as SessionAdapter;

    // FactoryDefault Dependency Injector automagically register the services
    $di = new FactoryDefault();

    // Get the global config
    $di->set('config', $config);

    // URL Component
    $di->set('url', function () use ($config) {
        $url = new UrlResolver();
        $url->setBaseUri($config->url . $config->app->baseUri);
        $url->setStaticBaseUri($config->url . $config->app->baseUri);
        return $url;
    }, true);

    // Set view options
    $di->set('view', function () use ($config) {
        $view = new View();
        $view->setViewsDir($config->app->viewsDir);
        $view->registerEngines(array(
            '.volt' => function ($view, $di) use ($config) {
                $volt = new VoltEngine($view, $di);
                $volt->setOptions(array(
                    'compiledPath'      => $config->app->cacheDir . 'volt/',
                    'compiledSeparator' => '_'
                ));
                return $volt;
            }
        ));
        return $view;
    }, true);

    $di->set('db', function () use ($config) {
        return new DbAdapter(array(
            'host' => $config->database->host,
            'username' => $config->database->username,
            'password' => $config->database->password,
            'dbname' => $config->database->dbname
        ));
    });

    $di->set('modelsMetadata', function () {
        return new MetaDataAdapter();
    });

    $di->set('session', function () {
        $session = new SessionAdapter();
        $session->start();

        return $session;
    });

    // Routing
    $di->set('router', function () {
        return require APP_PATH . '/routes.php'; 
    });