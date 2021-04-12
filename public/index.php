<?php

require ("../vendor/autoload.php");

use App\wcs\Hello;

$hello = new Hello();
echo $hello->talk();