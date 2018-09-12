<?php
	function UCLN($numerator,$denominator){

		for($i =1; $i <= $numerator; $i++) {if($numerator%$i==0)$arr_Numerator[] = $i;}
		for($i =1; $i <= $denominator; $i++) {if($denominator%$i==0)$arr_Denominator[] = $i;}
		
		$arr_Fractions = array_intersect($arr_Numerator, $arr_Denominator);
		
		$result = max($arr_Fractions);
		return $result;
	}

	function BCNN($numerator,$denominator){
		$ucln = UCLN($numerator, $denominator);
		$numerator = $numerator/$ucln;
		$denominator = $denominator/$ucln;

		$result = $numerator * $denominator;
		return $result;
	}
?>