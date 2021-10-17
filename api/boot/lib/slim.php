<?php

use Slim\Factory\AppFactory;
use DI\Container;
use Middlewares\TrailingSlash;

$container = new Container();

AppFactory::setContainer($container);

$app = AppFactory::create();

$app->add(new TrailingSlash(false));
