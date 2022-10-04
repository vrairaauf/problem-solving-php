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
	/*--------------------------*/
	public function size():int{
		if($this->isEmpty())
			return 0;
		$vHead=$this->Head;
		$size=0;
		while($vHead!=null){
			$size++;
			$vHead=$vHead->getNext();
		}
		return $size;
	}
	/*------------------------*/
	public function compare(LinkedList $list):bool{
		if($this->isEmpty() && $list->isEmpty())
			return true;
		if($this->size()==$list->size()){
			$vhead1=$this->Head;
			$vhead2=$list->Head;
			while($vhead1 != null){
				if($vhead1->getValue()==$vhead2->getValue()){
					$vhead1=$vhead1->getNext();
					$vhead2=$vhead2->getNext();
				}
				else
					return false;
			}
			return true;
		}
		return false;
	}
	/*----------------------------*/
	public function appendMultiple(){
		foreach (func_get_args() as $value) {
			$this->append($value);
		}
	}
	/*---------------------------*/
	public function preAppendMultiple(){
		foreach (func_get_args() as $value) {
			$this->preAppend($value);
		}
	}
}

?>