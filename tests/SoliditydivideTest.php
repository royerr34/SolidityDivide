<?php
/**
 * Tests for SolidityDivide
 */

use PHPUnit\Framework\TestCase;
use Soliditydivide\Soliditydivide;

class SoliditydivideTest extends TestCase {
    private Soliditydivide $instance;

    protected function setUp(): void {
        $this->instance = new Soliditydivide(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditydivide::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
