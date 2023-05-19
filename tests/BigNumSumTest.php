<?php
require_once('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
use Kreid\AdditionBigNumbers\AddBigNum;

final class BigNumSumTest extends TestCase{
    private  $class;
    public function testIsAnswerRight1(): void
    {
        $case1=new $this->class('123','5555');
        $this->assertEquals(5678,$case1->getAns());
        $case2=new $this->class('0','0');
        $this->assertEquals(0,$case2->getAns());
        $case3=new $this->class('89999','9999');
        $this->assertEquals(99998,$case3->getAns());
        $case4=new $this->class('999999','999999');
        $this->assertEquals(1999998,$case4->getAns());
        $case5=new $this->class('8999999999999999999','99999999999999999999');
        $this->assertEquals(108999999999999999998,$case5->getAns());
    }
    protected function setUp(): void
    {
        $this->class =AddBigNum::class;
    }

    protected function tearDown(): void
    {
        $this->class = null;
    }
}