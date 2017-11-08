<?php

use PHPUnit\Framework\TestCase;

final class UnitTest extends TestCase
{
    public function testOneEqualsOne(): void
    {
        $this->assertEquals(1, 1);
    }
}