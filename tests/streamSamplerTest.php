<?php

/**
 * Created by PhpStorm.
 * User: dhirajpatra
 * Date: 22/3/17
 * Time: 9:53 PM
 */
use PHPUnit\Framework\TestCase;

include 'streamSampler.php';

/**
 * Class streamSamplerTest
 */
class streamSamplerTest extends TestCase
{
    /**
     * this test will assert whether the function generate expected length word from alphabet
     */
    public function testStreamSample()
    {
        // manually set the command line parameter values which method would have consume from command line
        global $argc, $argv;
        $argv[1] = 5; // length of dynamic word to be created
        $argc = count($argv);

        // get the value from method
        $word = StreamSampler::makeSample();
        $this->assertGreaterThanOrEqual(2, $argc, 'No environment name passed');

        $this->assertEquals(5, strlen($word));
    }
}
