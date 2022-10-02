<?php 
namespace Raouf\Phpunit;
class Node{
	private $data;
	private $next;

	public function __construct(int $data){
		$this->data=$data;
	} 
	/*-----------------------*/
	public function getValue(){
		return $this->data;
	}
	/*--------------------------*/
	public function getNext(){
		return $this->next;
	}
	/*-----------------------------*/
	public function setData($data){
		$this->data=$data;
	}
	/*----------------------------------*/
	public function setNext(\Raouf\Phpunit\Node $node){
		$this->next=$node;
	}
	/*----------------------------------*/
}
?>