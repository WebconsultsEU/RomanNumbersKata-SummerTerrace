<?php
namespace CleanCode\Test;

use CleanCode\RomanNumbers\RomanNumbers;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class RomanNumbersTest extends \PHPUnit_Framework_TestCase
{
  public function testSuiteIsRunning() {
      $this->assertTrue(true);
  }
  public function testGetObject() {
      $convert = new RomanNumbers();
      $this->assertInstanceOf('CleanCode\RomanNumbers\RomanNumbers', $convert);
  }

  public function testConvert1() {
      $convert = new RomanNumbers();
      $this->assertEquals('I', $convert->intToRoman(1));
  }

    public function testConvert2() {
        $convert = new RomanNumbers();
        $this->assertEquals('II', $convert->intToRoman(2));
        $this->assertEquals('III', $convert->intToRoman(3));
    }

    public function testConvert5() {
        $convert = new RomanNumbers();
        $this->assertEquals('V', $convert->intToRoman(5));
        $this->assertEquals('VI', $convert->intToRoman(6));
        $this->assertEquals('IX', $convert->intToRoman(9));
        $this->assertEquals('X', $convert->intToRoman(10));
        $this->assertEquals('IV', $convert->intToRoman(4));
    }


}