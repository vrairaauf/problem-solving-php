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
	public function preAppend(int $data){
		$node=new Node($data);
		if($this->isEmpty())
		{
			$this->Head=$node;
			return;
		}
		$node->setNext($this->Head);
		$this->Head=$node;
	}
	/*-----------------------------------------*/
	public function pop(){
		if($this->isEmpty())
			return;
		$vHead=$this->Head;
		while($vHead->getNext()->getNext()!=null){
			$vHead=$vHead->getNext();
		}
		$vHead->setNext(null);

	}
	/*-------------------------------------*/
	public function popHead(){
		if($this->isEmpty())
			return;
		$this->Head=$this->Head->getNext();
	}
	/*-------------------------------------*/
	public function show(){
		if($this->isEmpty())
		{
			return;
		}
		$vHead=$this->Head;
		echo "\n";
		while($vHead!=null){
			echo $vHead->getValue();
			echo "\n";
			$vHead=$vHead->getNext();
		}		
	}
	
}

?>