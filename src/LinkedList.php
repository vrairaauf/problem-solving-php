<?php  
namespace Raouf\Phpunit;
class LinkedList{
	private $Head;
	public function __construct(){
		$this->Head=null;
	}	
	/*-----------------------------------*/
	public function isEmpty():bool{
		if($this->Head==null)
			return true;
		return false;
	}
	/*-------------------------------------*/
	public function append(int $data){
		$node=new Node($data);
		if($this->isEmpty()){
			$this->Head=$node;
			return;
		}
		$vHead=$this->Head;
		while($vHead->getNext()!=null){
			$vHead=$vHead->getNext();
		}
		$vHead->setNext($node);
	}
	/*---------------------------------------*/
	public function getHeadValue(){
		if ($this->isEmpty())
			return null;
		return $this->Head->getValue();
	}
	/*----------------------------------------*/
}

?>