<?php

    return new \Phalcon\Config(array(
        'debug'    => true,
        'url'      => 'http://localhost',
        'timezone' => 'UTC',
        'locale'   => 'en',
        'key'      => 'UltraSecretSuperMegaKey',
        'app'      => require 'paths.php',
        'database' => require 'database.php',
        'mail'     => require 'mail.php'
    ));