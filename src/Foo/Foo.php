<?php

namespace Hello\Foo;

use Ramsey\Uuid\Uuid;

class Foo {
    public function toString() {
        return Uuid::uuid4();
    }
}
