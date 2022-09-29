<?php 
namespace Raouf\Phpunit;
class Math{
	public static function isPair($n)
	{
		if($n%2==0)
			return true;
		return false;
	}
	public static function isImpair($n)
	{
		if($n%2==0)
			return false;
		return true;
	}
}
?>