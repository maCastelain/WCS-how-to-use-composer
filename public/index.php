<?php
require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use \App\Wcs\Hello;
use \HelloWorld\SayHello;

echo Hello::talk();
echo SayHello::world();