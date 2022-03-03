<?php

require '../src/Foo/Foo.php';

use Hello\Foo\Foo;
use Hello\Bar\Bar;

$foo = new Foo();
$result = $foo->toString();
var_dump($result);

$bar = new Bar();
$result = $bar->toString();
var_dump($result);
