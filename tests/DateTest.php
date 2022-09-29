<?php 
use PHPUnit\Framework\TestCase;
use Raouf\Phpunit\Date;

class DateTests extends TestCase {
	/*--------------------------------------------*/
	public function testSuccessDate()
	{
		$this->assertEquals(Date::getNumberOfDay(6), 'الأحد');
	}
	/*
	public function testOutput()
	{
	$this->expectOutputString("hhhhhh");
	$m=Raouf\PhpUnit\Math::pairs(6);
	if($m==6)
		echo "hhhhhh";
	else
		echo "failed"
	un bloc de code qui est attendue de mettre s=cette sortie
	}
	*/
}
?>