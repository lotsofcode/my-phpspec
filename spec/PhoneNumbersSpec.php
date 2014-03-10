<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PhoneNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PhoneNumbers');
    }

    function it_should_validate_01_numbers()
    {
    	$this->isValid("01458 101010")->shouldReturn(true);
    }

    function it_should_validate_02_numbers()
    {
    	$this->isValid("0204 101 0101")->shouldReturn(true);
    }

    function it_should_validate_03_numbers()
    {
    	$this->isValid("0314 101 0101")->shouldReturn(true);
    }

    function it_should_not_validate_text_string()
    {
    	$this->isValid("not a telephone number")->shouldReturn(false);
    }

    function it_should_not_validate_short_numbers()
    {
    	$this->isValid("0123")->shouldReturn(false);
    }

    function it_should_not_validate_long_numbers()
    {
    	$this->isValid("01210191919191919191919183")->shouldReturn(false);
    }

    function it_should_not_validate_empty_strings()
    {
    	$this->isValid("")->shouldReturn(false);
    }
}
