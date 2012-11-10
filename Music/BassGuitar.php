<?php

namespace Music;

use Music\AbstractMusic;
use Music\Playable;

class BassGuitar extends AbstractMusic implements Playable
{
    public function Tune()
    {
        print "G D A E <br/>";
    }
    public function Play()
    {
        print "play slap <br/>";
    }
}
