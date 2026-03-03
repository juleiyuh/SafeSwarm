<?php
/**
 * Tests for SafeSwarm
 */

use PHPUnit\Framework\TestCase;
use Safeswarm\Safeswarm;

class SafeswarmTest extends TestCase {
    private Safeswarm $instance;

    protected function setUp(): void {
        $this->instance = new Safeswarm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Safeswarm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
