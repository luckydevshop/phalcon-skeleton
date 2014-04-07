<?php

    define('BASE_DIR', dirname(__DIR__) . '/');
    define('APP_PATH', BASE_DIR . 'app/');

    try {
        // load the helpers file
        require BASE_DIR . 'bootstrap/helpers.php';

        // Get the config
        $config = include APP_PATH . 'config/app.php';

        // AutoLoader (now in the loader file)
        include BASE_DIR . 'bootstrap/loader.php';

        // Dependency Injection (done through services file now)
        include BASE_DIR . 'bootstrap/services.php';

        // Deploy the app
        $application = new \Phalcon\Mvc\Application($di);
        echo $application->handle()->getContent();

    } catch(\Exception $e) {
        echo $e->getMessage();
    }
?>