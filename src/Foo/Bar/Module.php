<?php
namespace Sample\Foo\Bar;

use Lipht\Module as BaseModule;

class Module extends BaseModule {
    public static function listServices() {
        return [
            ForeignService::class,
        ];
    }
}
