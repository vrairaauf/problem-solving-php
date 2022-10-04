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
	    
	    $list1 = new Linkedlist();
	    $list1->append(1);
	    $list1->append(2);
	    $list1->append(3);
	    $list1->append(4);
	    $list1->append(5);
	    $list1->append(100);
	    $list1->append(200);
	    $list1->append(300);
	    
	    $list1->appendMultiple(89, 412, 120);
	    $list1->show();
	    $this->assertSame(false, $list->compare($list1));
	    //$this->assertSame(18, $user->age);
	    //$this->assertEmpty($user->favorite_movies);
	}
}
?>