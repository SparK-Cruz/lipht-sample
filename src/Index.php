<?php
namespace Sample;

use Lipht\Mvc\Router;
use Lipht\Mvc\Middleware;

use Sample\Modules\RootModule;
use Sample\Modules\Foo\Bar\ForeignController;
use Sample\Modules\Foo\LocalService;

class Index {
    public static function main() {
        RootModule::init();
        $router = new Router(dirname(__DIR__));

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
