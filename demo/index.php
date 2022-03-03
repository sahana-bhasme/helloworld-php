<?php

require '../src/Foo/Foo.php';

use Hello\Foo\Foo;

$foo = new Foo();
$result = $foo->toString();
var_dump($result);
