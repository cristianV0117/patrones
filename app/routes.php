<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->get('/pattern/abstractFactory', \App\Application\Actions\Pattern\AbstractFactory\Main::class);
    $app->get('/pattern/adapter', \App\Application\Actions\Pattern\Adapter\Main::class);
    $app->get('/pattern/builder', \App\Application\Actions\Pattern\Builder\Main::class);
    $app->get('/pattern/factoryMethod', \App\Application\Actions\Pattern\FactoryMethod\Main::class);
    $app->get('/pattern/facade', \App\Application\Actions\Pattern\Facade\Main::class);
    $app->get('/pattern/decorator', \App\Application\Actions\Pattern\Decorator\Main::class);

    $app->get('/pattern/command', \App\Application\Actions\Pattern\Command\Main::class);
    $app->get('/pattern/templateMethod', \App\Application\Actions\Pattern\TemplateMethod\Main::class);
    $app->get('/pattern/iterator', \App\Application\Actions\Pattern\Iterator\Main::class);
    $app->get('/pattern/observer', \App\Application\Actions\Pattern\Observer\Main::class);
    $app->get('/pattern/nullObject', \App\Application\Actions\Pattern\NullObject\Main::class);

    $app->get('/pattern/solid', \App\Application\Actions\Pattern\Solid\Main::class);
};
