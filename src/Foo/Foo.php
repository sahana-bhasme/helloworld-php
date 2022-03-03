<?php

namespace Hello\Foo;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Ramsey\Uuid\Uuid;

class Foo {
    public function toString() {
        return Uuid::uuid4();
    }
}
