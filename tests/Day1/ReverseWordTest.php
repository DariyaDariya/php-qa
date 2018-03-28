<?php

namespace Tests\Day1;

use Day1\ReverseTask\Reverse;
use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase
{
    /** @var Reverse */
    private $reverse;

    public function setUp()
    {
        $this->reverse = new Reverse();
    }

    public function test_string_for_world()
    {
        $this->assertEquals('dlrow', $this->reverse->solution('world'));
    }

    public function test_string_for_space()
    {
        $this->assertEquals(' ', $this->reverse->solution(' '));
    }

    public function test_string_for_wo_rld()
    {
        $this->assertEquals('dlr ow', $this->reverse->solution('wo rld'));
    }

    public function test_string_for_nothing()
    {
        $this->assertEquals('Please, paste smth', $this->reverse->solution(''));
    }
}
