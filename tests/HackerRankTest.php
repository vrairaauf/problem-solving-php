<?php 

use PHPUnit\Framework\TestCase;
class HackerRankTest extends TestCase {
	/*---------------1----------------------------------*/
	public function testDrawingBoockSuccess()
	{
		$this->assertEquals(\Raouf\Phpunit\HackerRank::drawingBoock(2, 3), 0);
		$this->assertEquals(\Raouf\Phpunit\HackerRank::drawingBoock(5, 6), 1);
		$this->assertEquals(\Raouf\Phpunit\HackerRank::drawingBoock(2, 6), 1);
		$this->assertEquals(\Raouf\Phpunit\HackerRank::drawingBoock(5, 11), 2);
	}
	/*----------------2-----------------------------*/
	public function testCountingValleys()
	{
		$this->assertEquals(\Raouf\Phpunit\HackerRank::countValleys(8, "UDDDUDUU"), 1);
	}
	/*-----------------3-----------------------------------*/
	public function testElectronicShop(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::getMoneySpent(60, drives:[8,10,12], keyboards:[40, 50, 60]), 60);
	}
	/*-----------------4----------------------------------------*/
	public function testCatsAndMouse(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::catsAndMouse(3, 2, 1), "Cat B");
		$this->assertEquals(\Raouf\Phpunit\HackerRank::catsAndMouse(3, 3, 1), "Mouse C");
	}
	/*-----------------5--------------------------------------*/
	public function testCaseHurdleRace(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::hurdleRace(5, [1, 3, 5, 4, 1]), 0);
	}
	/*------------------6------------------------------------------*/
	public function testCaseDesignerPdfViewer(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::designerPdfViewer("abc", [1, 2, 5, 8, 9, 1, 2, 4, 1, 2, 2, 2, 5, 4, 7, 1, 3, 3, 2, 1, 1, 5, 7, 3, 1, 3]), 15);
	}
	/*-------------------7-----------------------------------------*/
	public function testCaseUtopianTree(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::utopianTree(5), 14);
	}
	/*-----------------8----------------------*/
	public function testSquares(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::squares(24, 49), 3);
	}
	/*----------------9----------*/
	public function testRepeatedString(){
		$s="aba";
		$n=10;
		$this->assertEquals(\Raouf\Phpunit\HackerRank::repeatedString($s, $n), 7);
	}
	/*----------------10--------------------------*/
	public function testLibraryFine(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::libraryFine(11, 1, 1999, 11, 1, 1999), 0);
	}
	/*---------------11--------------------------*/
	public function testcutTheSticks()
	{
		$this->assertEquals(\Raouf\Phpunit\HackerRank::cutTheSticks([1,2,3]), [3,2,1]);
	}
	/*----------------------12-----------------*/
	public function testEqualizeArray()
	{
		$this->assertEquals(\Raouf\Phpunit\HackerRank::equalizeArray([1, 2, 3, 3, 3]), 2);
	}
	/*----------------------13-------------------------*/
	public function testLeftRotatee(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::leftRotate(2, [1,2,3,4,5]), [3,4,5,1,2]);
	}
	/*-----------------14-----------------*/
	public function testMatchingString(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::matchingString(["ab", "ab", "abc"], ["ab", "abc", "ac"]), [2, 1, 0]);
	}
	/*------------------15--------------------*/
	public function testArrayManipulate(){
		$this->assertEquals(\Raouf\Phpunit\HackerRank::arrayManipulate(10, [[1, 5, 3], [4, 8, 7], [6, 9, 1]]), 10);
	}
}
?>