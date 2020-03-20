<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../../src/sum.php';

class SumTest extends TestCase
{
  /**
   * @test
   * @testdox Does basic addition
   */
  public function does_basic_addition()
  {
    $result = sum(1, 2);
    $this->assertEquals(3, $result);
  }
}
