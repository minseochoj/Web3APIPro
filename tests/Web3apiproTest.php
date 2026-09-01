<?php
/**
 * Tests for Web3APIPro
 */

use PHPUnit\Framework\TestCase;
use Web3apipro\Web3apipro;

class Web3apiproTest extends TestCase {
    private Web3apipro $instance;

    protected function setUp(): void {
        $this->instance = new Web3apipro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3apipro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
