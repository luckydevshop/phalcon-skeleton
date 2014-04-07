<?php

    $router = new Phalcon\Mvc\Router\Annotations(false);

    $router->removeExtraSlashes(true);
    $router->setDefaults(array(
        "controller" => "index",
        "action"     => "index"
    ));

    // there should be a better way to load multiples like this

    $router->add("/login", array(
        "controller" => "session",
        "action"     => "login"
    ));

    $router->add("/signup", array(
        "controller" => "session",
        "action"     => "signup"
    ));

    $router->add("/logout", array(
        "controller" => "session",
        "action"     => "logout"
    ));

    $router->addResource('Index', '/');

    /*echo "<pre>";
    print_r($router);
    echo "</pre>";
    die();*/

    $router->notFound(array(
        "controller" => "index",
        "action"     => "notFound"
    ));

    return $router;
