<?php


namespace Code;

use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{
    public function assertPreConditions(): void
    {

        $checkClass = class_exists('\\Code\\Log');

        $this->assertTrue($checkClass);
    }

    /**
     * @test
     */

    public function it_should_be_able_insert_a_message()
    {
        $log = new Log();
        $message = $log->log('Test');
        $this->assertEquals('Test', $message);
    }
}