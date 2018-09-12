<?php
	
	//INDIVIDUAL NOUNS
	define("I", 1);
	//NONE
	define("N", 0);
	
	$str = "    Nguyen        VAn      an          ";
	function formatString($str, $type){
		//get all to lower case
		$str = strtolower($str);
		//remove blank at head and tail
		$str = trim($str);
		//exchange string to array
		$array = explode(" ", $str);
		
		//remove blank at middle
		foreach($array as $key => $value){
			if(trim($value) == null){
				unset($array[$key]);
				continue;
			}
			//upper case first char when individual nouns
			if($type == I){
				$array[$key] = ucfirst($value);
			}
		}
		
		//exchange array to string
		$result = implode(" ", $array);
		
		// upper case first char of string
		$result = ucfirst($result);
		
		return $result;
	}
	
	$result = formatString($str, I);
	echo $result . " | " . strlen($result)
?>