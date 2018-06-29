<?php
namespace Sample\Modules\Foo;

use Sample\Modules\HelloService;


class LocalService {
    private $hello;

    public function __construct(HelloService $hello) {
        $this->hello = $hello;
    }

    public function greet($name) {
        return $this->hello->sayHello().' '.$name;
    }
}
