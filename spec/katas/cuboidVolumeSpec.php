<?php

namespace spec\katas;

use katas\cuboidVolume;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class cuboidVolumeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(cuboidVolume::class);
    }
}
