<?php

namespace JsonMachineTest;

use PHPUnit\Framework\TestCase;

class ExtJsonmachineTest extends TestCase
{
    public function testExtensionLoaded()
    {
        $this->assertTrue(function_exists('jsonmachine_next_token'));
    }
}
