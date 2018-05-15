<?php

namespace spec\Katas;

use Katas\cuboidVolume;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class cuboidVolumeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(cuboidVolume::class);
    }
}
