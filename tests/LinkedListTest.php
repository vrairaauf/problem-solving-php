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
	    $list1->append(6);
	    $list1->append(7);
	    $list1->append(8);
	    
	    $list1->appendMultiple(9, 10, 11);
	    $list1->insert(12365, 3);
	    $list1->show();
	    $this->assertSame(false, $list->compare($list1));
	    //$this->assertSame(18, $user->age);
	    //$this->assertEmpty($user->favorite_movies);
	}
}
?>