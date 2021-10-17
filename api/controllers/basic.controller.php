<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BasicController
{
  private $container;
  private $tarifGroups;

  public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
  {
    return $response
      ->getBody()
      ->write(json_encode([
        'message' => "hello"
      ]));
  }
}
