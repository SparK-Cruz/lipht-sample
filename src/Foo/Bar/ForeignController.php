<?php
namespace Sample\Foo\Bar;

use Lipht\Mvc\Controller;

/**
 * @route(pt-br)
 */
class ForeignController extends Controller {

    /**
     * @route()
     * @route(name:\w+)
     */
    public function hello($args, ForeignService $service) {
        $name = $args->name ?? 'Anonymous';

        return ['greet' => $service->greet($name)];
    }
}
