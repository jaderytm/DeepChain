<?php
/**
 * Tests for DeepChain
 */

use PHPUnit\Framework\TestCase;
use Deepchain\Deepchain;

class DeepchainTest extends TestCase {
    private Deepchain $instance;

    protected function setUp(): void {
        $this->instance = new Deepchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Deepchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
