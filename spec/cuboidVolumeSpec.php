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

    function it_returns_8_for_2_cubed()
    {
        $this->getVolume(2,2,2)->shouldReturn(8);
    }

    function it_returns_100_for_10_2_5()
    {
        $this->getVolume(10,2,5)->shouldReturn(100);
    }
}
