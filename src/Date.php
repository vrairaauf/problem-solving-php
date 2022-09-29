<?php
namespace Raouf\Phpunit;

class Date{
	private static $months=['جانفي', 'فيفري', 'مارس','أفريل' ,'ماي', 'جوان', 'جويلية', 'أوت','سبتمبر', 'أكتوبر', ' نوفمبر', ' ديسمبر'];
	private static $days =['الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت', 'الأحد'];

	private static $englishMonth=['January', 'February', 'March', 'April', 'May', 'May', 'July', 'August', 'September', 'October', 'November', 'December'];

	/*---------------------------------------------------------------------*/
	public static function getCalendrier($year)
	{
		$calendrier=array();
		$timestamp=strtotime("01 January $year");
		while(date("Y", $timestamp)<=$year)
		{
			$y=date("Y", $timestamp);
			$m=date("n", $timestamp);
			$j=date("j", $timestamp);
			$w=str_replace("0", "7", date("w", $timestamp));

			$calendrier[$y][$m][$j]=$w;
			$timestamp=strtotime(date("Y-m-d", $timestamp)."+1 DAY");
		}
		return $calendrier;
	}
	/*----------------------------------------------------------------------*/
	public static function getDays()
	{
		return self::$days;
	}
	/*------------------------------------------------------------------------*/
	public static function getMonths()
	{
		return self::$months;
	}
	/*-------------------------------------------------------------------------*/
	public static function getMonthName($n)
	{
		$n--;
		return self::$months[$n];
	}
	/*-------------------------------------------------------------------------*/
	public static function getDayName($n)
	{
		$n--;
		return self::$days[$n];
	}
	/*-----------------------------------------------------------------*/
	public static function monthCalendrier($year, $month)
	{
		$calendrier=array();
		$monthnumber=self::getMonthNumber($month);
		$l=strtotime("1/$monthnumber/$year");
		$timestamp=strtotime("1/$monthnumber/$year");
		//die(date("n", $timestamp));
		if($monthnumber){
			while(date("Y-m", $timestamp)<=date("Y-m", $l))
			{
				$y=date("Y", $timestamp);
				$m=date("n", $timestamp);
				$j=date("j", $timestamp);
				$w=str_replace("0", "7", date("w", $timestamp));
				$calendrier[$y][$m][$j]=$w;
				$timestamp=strtotime(date("Y-m-d", $timestamp)."+1 DAY");
			}
			return $calendrier;
		}
		die("cette mois n'existe pas");
	}
	/*-----------------------------------------------------------------*/
	public static function getNameEnglishMonth($n)
	{
		$n-=1;
		if($n>=12)
			die("cete mois nexiste pas");
		return self::$englishMonth[$n];
	}
	/*--------------------------------------------------------------------*/
	public static function getMonthNumber($name)
	{
		$cmp=1;
		foreach(self::$englishMonth as $month)
		{
			if($month===$name)
				return $cmp;
			$cmp++;
		}
		return false;

	}
	/*---------------------------------------------------------------------*/
	public static function getMonthCalendrierFromCalendrier($year, $month)
	{
		$calendrier=self::getCalendrier($year);
		$return[$year][$month] = $calendrier[$year][$month];
		return $return;
	}
	/*----------------------------------------------------------------------*/
	public static function nbDayPerMonth($year, $month)
	{
		$monthCalendrier=self::getMonthCalendrierFromCalendrier($year, $month);
		return count(current(current($monthCalendrier)));
	}
	/*-----------------------------------------------------------------------*/
	public static function getNumberOfDay(int $n)
	{
		if($n>=7)
		{
			$n=$n%7;
		}
		return self::$days[$n];
	}
	/*-------------------------------------------------------------------*/
}

?>
