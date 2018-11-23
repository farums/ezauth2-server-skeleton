<?php
/**
 * Created by PhpStorm.
 * User: jstormes
 * Date: 6/22/2018
 * Time: 2:58 PM
 */

declare(strict_types=1);

namespace App;


use JStormes\EZAuth2\Middleware\EZAuth2Middleware;
use Interop\Container\ContainerInterface;

class EZAuth2MiddlewareFactory
{

    public function __invoke(ContainerInterface $container) : EZAuth2Middleware
    {
        //return new EZAuth2Middleware('oauth2.loopback.world', 'myawesomeapp', 'abc123', 'scope1 scope2');
        return new EZAuth2Middleware($_SERVER['SERVER_NAME'], 'myawesomeapp', 'abc123', 'scope1 scope2');
    }
}