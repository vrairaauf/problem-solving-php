<?php 

use PHPUnit\Framework\TestCase;
use Raouf\Phpunit\Node;

use Raouf\Phpunit\LinkedList;
class LinkedListTest extends TestCase{
	public function testClassConstructor()
	{
	    $list = new LinkedList(18);
	    $list->append(3);
	    $this->assertSame(3, $list->getHeadValue());
	    //$this->assertSame(18, $user->age);
	    //$this->assertEmpty($user->favorite_movies);
	}
}
?>