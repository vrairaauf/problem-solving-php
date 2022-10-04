<?php 

use PHPUnit\Framework\TestCase;
use Raouf\Phpunit\Node;

use Raouf\Phpunit\LinkedList;
class LinkedListTest extends TestCase{
	public function testClassConstructor()
	{
	    $list = new LinkedList();
	    $list->append(1);
	    $list->append(2);
	    $list->append(3);
	    $list->append(4);
	    $list->append(5);
	    $list->append(100);
	    $list->append(200);
	    $list->append(300);
	    
	    $list->pop();
	    $list->pop();$list->pop();$list->pop();
	    $list->show();
	    $this->assertSame(1, $list->getHeadValue());
	    //$this->assertSame(18, $user->age);
	    //$this->assertEmpty($user->favorite_movies);
	}
}
?>