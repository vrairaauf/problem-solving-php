<?php 

use PHPUnit\Framework\TestCase;
class MathTest extends TestCase {
	
	public function testSuccess()
	{
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(2));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(4));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(6));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(8));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(10));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(12));
		$this->assertEquals(true, \Raouf\Phpunit\Math::isPair(14));
	}
	public function testFailure()
	{
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(3), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(5), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(7), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(9), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(11), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(13), false);
		$this->assertEquals(\Raouf\Phpunit\Math::isPair(15), false);
	}
}
?>