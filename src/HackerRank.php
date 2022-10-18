<?php 
namespace Raouf\Phpunit;
class HackerRank{

	public static function drawingBoock(int $p, int $n):int{
		$bridge=intdiv($n, 2);
		$ltr=intdiv($p, 2);
		$rtl=$bridge-$ltr;
		return ($rtl>$ltr)?$ltr:$rtl;
	}
	/*---------------------------------------------------*/
	//counting valley problem
	public static function countValleys(int $n, string $path):int{
		$countValley=0;
		$alt=0;
		for($i=0; $i<$n; $i++){
			if($path[$i]=="U"){
				$alt+=1;
				if($alt==0)
					$countValley++;
				
			}else
				$alt-=1;
		}
		return $countValley;
	}
	/*--------------------------------------------------------*/
	// electronique shop
	public static function getMoneySpent(int $budget, $keyboards=[], $drives=[]):int{
		$max=0;
		$somme=0;
		for($i=0; $i<count($keyboards); $i++){
			for($j=0; $j<count($drives); $j++){
				$somme=$keyboards[$i]+$drives[$j];
				if($somme>$max && $somme<=$budget){
					$max=$somme;
				}
			}
		}
		return ($max>0)?$max:-1;
	}
	/*---------------------------------------------------------*/
	public static function catsAndMouse(int $x, int $y, int $z):string{
		$distanceBetweenCatsAMouse=abs($z-$x);
		$distanceBetweenCatsBMouse=abs($z-$y);
		if($distanceBetweenCatsAMouse==$distanceBetweenCatsBMouse)
			return "Mouse C";
		return ($distanceBetweenCatsBMouse>$distanceBetweenCatsAMouse)?"Cat A":"Cat B";
	}
	/*--------------------------------------------------------*/
	public static function hurdleRace(int $k, $height=[]):int{
		$max=$height[0];
		for($i=1; $i<count($height); $i++){
			if($height[$i]>$max)
				$max=$height[$i];
		}
		return ($k>=$max)?0:$max-$k;
	}
	/*----------------------------------------------------------------*/
	public static function designerPdfViewer(string $word, $h=[]):int
	{
		$pos=self::getIndexOfWord($word[0]);
		$max=$h[$pos];
		for($i=1; $i<strlen($word); $i++)
		{
			$pos=self::getIndexOfWord($word[$i]);
			if($max<$h[$pos])
				$max=$h[$pos];
		}
		return $max*strlen($word);
	}
	private static function getIndexOfWord($c):int{
		$alphabets="abcdefghijklmnopqrstuvwxyz";
		$pos=0;
		while ($pos<26) {
			if($alphabets[$pos]==$c)
				break;
			$pos++;
		}
		return $pos;
	}
	/*-----------------------------------------------------------------*/
	public static function  utopianTree(int $n):int{
		$height=1;
		for($i=1; $i<=$n; $i++){
			if($i%2==0)
				$height+=1;
			else
				$height+=$height;
		}
		return $height;
	}
	/*---------------------------------------------------------------------*/
	public static function beautifulDays(int $i, int $j, int $k):int{
		$beautiful=0;
		for($cmp=$i; $cmp<=$j; $cmp++){
			if(abs($cmp-self::integerReverse($cmp)) % $k == 0)
				$beautiful+=1;
			
		}
		return $beautiful;
	}
	private static function integerReverse(int $nbr):int{
		$r=0;
		while($nbr != 0){
			$r= $r*10;
			$r+=$nbr%10;
			$nbr=$nbr/10;
		}
		return $r;
	}
	/*-------------------------------*/
	public static function squares(int $a, int $b):int{
		$A=(int)sqrt($a);
		$B=(int)sqrt($b);

		$res=$B-$A;
		if($A*$A==$a)
			$res++;
		return $res;
	}
	/*-------------------------------------*/
	private static function nbletterAInCh(string $s, int $limit=0, bool $limitation=false ):int{
		$result=0;
		$cmp=0;
		if($limitation){
			while($cmp<$limit){
				if($s[$cmp]=="a"){
					$result++;
				}
				$cmp++;
			}
		}else{
			while($cmp<strlen($s)){
				if($s[$cmp]=="a")
					$result++;
				$cmp++;
			}
		}
		return $result;
	}

	public static function repeatedString(string $s, int $n):int{
		if(strlen($s)==1 && $s[0]=="a"){
			return $n;
		}
		$nbOfAInS=0;
			if($n>strlen($s)){
			$nbOfAInS=self::nbletterAInCh($s);
			$nDiviseLengthS=$n%strlen($s);
			$nQotientLengthS=(int)$n/strlen($s);
			$nbOfAInS*=$nQotientLengthS;
			$nbOfAInS+=self::nbletterAInCh($s, $nDiviseLengthS, true);
		}else{
			$nbOfAInS+=self::nbletterAInCh($s, $n, true);
		}
		return $nbOfAInS;
	}
	/*---------------------------------------------------*/
	public static function libraryFine(int $d1, int $m1, int $y1, int $d2, int $m2, int $y2):int{
		if($y1>$y2)
			return 10000;
		elseif($m1>$m2 && $y1==$y2)
			return 500*($m1-$m2);
		elseif($d1>$d2 && $m1==$m2 && $y1==$y2)
			return 15*($d1-$d2);
		else
			return 0;
	}
	/*------------------------------------------------*/
	private static function removeAll(array $array, int $n):array{
		$ch='';
		foreach($array as $e){
			$ch.=strval($e);
		}
		$ch=str_replace(strval($n), "", $ch);
		$res=[];
		$cmp=0;
		for($cmp=0; $cmp<strlen($ch); $cmp++){
			$res[$cmp]=intval($ch[$cmp]);
		}
		return $res;
	}
	/***********************************/
	public static function cutTheSticks(array $array):array{
		$sizes=[];
		$cmp=0;
		while(count($array)!=0){
			$sizes[$cmp]=count($array);
			$min=min($array);
			$array=self::removeAll($array, $min);
			for($i=0; $i<count($array); $i++)
			{
				$array[$i]=$array[$i]-$min;
			}
			$cmp++;
		}
		return $sizes;
	}
	/*----------------------------------------------*/
	public static function equalizeArray(array $arr):int{
		$mostRepeated=0;
		$cmp=0;
		while($cmp<count($arr))
		{
			$rep=1;
			for($i=0; $i<count($arr); $i++)
			{
				if($i!=$cmp)
				{
					if($arr[$i]==$arr[$cmp])
						$rep++;
				}
			}
			if($rep>$mostRepeated)
				$mostRepeated=$rep;
			$cmp++;
		}
		return count($arr)-$mostRepeated;
	}

	/*------------------------------*/
	public static function leftRotate(int $d, array $arr):array{
		$result=[];
		for($cmp=0; $cmp<count($arr); $cmp++){
			$result[$cmp]=$arr[($cmp+$d)%count($arr)];
		}
		return $result;
	}
	/*--------------------------------------*/
	public static function matchingString(array $listString, array $queries):array{
		$response=[];
		for($i=0; $i<count($queries); $i++){
			$counter=0;
			for($j=0; $j<count($listString); $j++){
				if($queries[$i]==$listString[$j])
					$counter++;
			}
			$response[$i]=$counter;
		}
		return $response;
	}
	/*---------------------------------------*/
	public static function arrayManipulate(int $n, array $arr):int{
		$n+=2;
		
		$result=[];
		for($i=0; $i<=$n; $i++){
			$result[$i]=0;
		}
		$i=0;
		while($i<count($arr)){
			$start=$arr[$i][0];
			$end=$arr[$i][1]+1;
			$add=$arr[$i][2];
			$result[$start]+=$add;
			$result[$end]-=$add;
			$i++;
		}
		
		$max=$result[0];
		$i=1;
		while($i<$n){
			$result[$i]+=$result[$i-1];
			if($result[$i]>$max)
				$max=$result[$i];
			$i++;
		}
		//die(var_dump($result));
		return $max;

	}
	/*----------------------------------*/
	public static function taumBDay(int $b, int $w, int $bc, int $wc, int $z):int{
		if($bc+$z<$wc)
			return $bc*$b+($bc+$z)*$w;
		elseif($wc+$z<$bc)
			return $wc*$w+($wc+$z)*$b;
		else
			return $bc*$b+$wc*$w;
	}
	/*------------------------------------------*/
}
?>