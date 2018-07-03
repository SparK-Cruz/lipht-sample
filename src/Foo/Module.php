<?php
namespace Sample\Foo;

use Lipht\Module as BaseModule;

class Module extends BaseModule {
    public static function listServices() {
        return [
            LocalService::class,
        ];
    }
}
