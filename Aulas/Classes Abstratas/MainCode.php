<?php

require_once("model/Midia.php");
require_once("model/DVD.php");
require_once("model/CD.php");

$cd = new CD("ACDC", 120.00);
print $cd . "\n";

$dvd = new DVD("Frozen", 240.00);
print $dvd . "\n";