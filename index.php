<?php

require_once 'autoload.php';

use Music\AcousticGuitar;
use Music\BassGuitar;

$obj = new AcousticGuitar();
$obj->Tune();

$obj2 = new BassGuitar();
$obj2->Play();
