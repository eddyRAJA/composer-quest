<?php

require ("../vendor/autoload.php");

use App\wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();

$hello = new SayHello();
echo $hello->world();