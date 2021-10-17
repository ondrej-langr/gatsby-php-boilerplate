<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $grp) {
  $grp->any('/{path:.*}', '\App\Controllers\BasicController');
});
