<?php
namespace Sample;

use Lipht\Module;

class RootModule extends Module {
    public static function foo($callback = null) {
        return static::coldStartChildModule(__METHOD__, $callback);
    }

    public static function listServices() {
        return [
            HelloService::class,
        ];
    }
}
