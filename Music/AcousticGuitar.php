<?php

namespace Music;

use Music\AbstractMusic;
use Music\Playable;

class AcousticGuitar extends AbstractMusic implements Playable
{
    public function Tune()
    {
        print "E C G D A E <br/>";
    }
    public function Play()
    {
        print "play solo <br/>";
    }
}


