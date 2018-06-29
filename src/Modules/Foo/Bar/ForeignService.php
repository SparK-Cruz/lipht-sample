<?php
namespace Sample\Modules\Foo\Bar;

use Sample\Modules\HelloService;
use Sample\Modules\Foo\LocalService;

class ForeignService {
    private $hello;
    private $local;

    public function __construct(HelloService $hello, LocalService $local) {
        $this->hello = $hello;
        $this->local = $local;
    }

    public function greet($name) {
        return str_replace($this->hello->sayHello(), 'Olá', $this->local->greet($name));
    }
}
