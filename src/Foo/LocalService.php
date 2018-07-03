<?php
namespace Sample\Foo;

use Sample\HelloService;

class LocalService {
    private $hello;

    public function __construct(HelloService $hello) {
        $this->hello = $hello;
    }

    public function greet($name) {
        return $this->hello->sayHello().' '.$name;
    }
}
