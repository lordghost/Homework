<?php

namespace Music;

abstract class AbstractMusic
{
    public $material;
    public $number_of_strings;

    abstract public function Tune();
}