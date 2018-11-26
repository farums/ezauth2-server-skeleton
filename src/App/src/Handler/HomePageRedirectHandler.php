<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\RedirectResponse;


class HomePageRedirectHandler implements RequestHandlerInterface
{

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return new RedirectResponse("\app");
    }
}
