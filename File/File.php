<!DOCTYPE html>
<html>
	<body>
		<form method = "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type="text" name="fname">
			<input type="submit">
		</form>

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$result = readNumber($_REQUEST["fname"]);
				echo "KET QUA : " . $result ;
			}
			
			$number = 256;
			
			function getNameNumber($point,$number){
				$result ="";
				switch($number){
					case 1 : if($point == 1){ $result = "mốt";}
							 else if($point == 2){ $result = "";}
							 else $result = "một";
							 break; 
					case 2 : $result = "hai" ;break; 
					case 3 : $result = "ba" ;break;  
					case 4 : $result = "bốn" ;break; 
					case 5 : $result = "năm" ;break; 
					case 6 : $result = "sáu" ;break; 
					case 7 : $result = "bảy" ;break; 
					case 8 : $result = "tám" ;break; 
					case 9 : $result = "chín" ;break; 
					default: ;
				}
				return $result;
			}
			
			function getNamePoint($point, $number){
				$result ="";
				if($point == 2 ){
					switch($number){
					case 0 : $result = "lẻ" ;break; 
					case 1 : $result = "mười" ;break;
					default: $result = "mươi" ;break;
				}
				}else if ($point == 3){
					$result = "trăm" ;
				}
				return $result;
			}
			function readNumber($number){
				$result = "";
				$i = 1;
				while($number != 0){
					$tempNumber = $number % 10;
					
					$result = getNamePoint($i, $tempNumber) . " " . $result;
					$result = getNameNumber($i, $tempNumber) . " " . $result;
					$i++;
					$number = (int) ($number /10);
					
				}
				return $result;
			}
			//năm trăm năm mươi năm tỷ tỷ tỷ ba trăm bảy mươi sáu triệu chín trăm hai mươi ba ngàn không trăm năm mươi sáu tỷ tỷ 
			//555.376.923.056.486.879.651.312.138.789
			
			//1,023,450,365
			//một tỷ, 
			//không trăm hai mươi ba triệu,
			//bốn trăm năm mươi nghìn,
			//ba trăm sáu mươi năm
			// $array[0][1] = ""
			// $array[0][2] = "lẻ"
			// $array[0][3] = "không"
			// $array[1][0] = "một"
			$array = new array();
			$array[1][0] = "một"
			$array[2] = "hai"
			$array[3] = "ba"
			$array[4] = "bốn"
			$array[5] = "năm"
			$array[6] = "sáu"
			$array[7] = "bảy"
			$array[8] = "tám"
			$array[9] = "chín"
		?>				
	</body>
</html>