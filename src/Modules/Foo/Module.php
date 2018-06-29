<?php
namespace Sample\Modules\Foo;

use Lipht\Module as BaseModule;

class Module extends BaseModule {
    public static function listServices() {
        return [
            LocalService::class,
        ];
    }
}
