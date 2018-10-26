<?php
namespace Sample;

use Lipht\Mvc\Router;
use Lipht\Mvc\Middleware;

use Sample\RootModule;
use Sample\Foo\Bar\ForeignController;
use Sample\Foo\LocalService;

class Index {
    public static function main(Router $router) {
        RootModule::init();

        $router->mapController(
            ForeignController::class,
            [
                Middleware::cors(),
                Middleware::module(RootModule::foo()->bar()),
            ]
        );

        $router->map('', 'GET', function($args){
            return 'It works!';
        });

        $router->map('name:\w+', 'GET', function($args, LocalService $service) {
            return $service->greet($args->name);
        }, [
            Middleware::module(RootModule::foo())
        ]);
    }
}
