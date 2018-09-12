<!DOCTYPE html>
<html>
	<body>
		<form method = "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="text" name="fractions1" value = "<?php echo isset($_POST['fractions1']) ? $_POST['fractions1'] : '' ?>">
			<select name ="operator" >
				<option value="+" selected="selected">+</option>
				<option value="-" >-</option>
				<option value="*">*</option>
				<option value=":">:</option>
			</select>
			<input type="text" name="fractions2" value = "<?php echo isset($_POST['fractions2']) ? $_POST['fractions2'] : '' ?>">
			<input type="submit" value="=">
			
		</form>

		<?php
			require_once 'MinimalFractions.php';
			
			
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$fractions1 = $_REQUEST["fractions1"];
				$fractions2 = $_REQUEST["fractions2"];
				$operator = $_POST["operator"];
				$result = calculator_fractions($fractions1, $fractions2, $operator);
				echo $result;
			}
			
			function calculator_fractions($fractions1, $fractions2, $operator){
				$arr_fractions1 = explode("/", $fractions1);
				$numerator1 = $arr_fractions1[0];
				$denominator1 = $arr_fractions1[1];
				$ucln1 = UCLN($numerator1, $denominator1);
				$numerator1 = $numerator1/$ucln1;
				$denominator1 = $denominator1/$ucln1;
				
				$arr_fractions2 = explode("/", $fractions2);
				$numerator2 = $arr_fractions2[0];
				$denominator2 = $arr_fractions2[1];
				$ucln2 = UCLN($numerator2, $denominator2);
				$numerator2 = $numerator2/$ucln2;
				$denominator2 = $denominator2/$ucln2;
				if($operator == ":"){
					$temp = $numerator2;
					$numerator2 = $denominator2;
					$denominator = $numerator2;
				}
				
				$bcnn = BCNN($denominator1, $denominator2);
				$numerator = 0;
				switch($operator){
					case '+': $numerator = $numerator1 *($bcnn/$denominator1) + $numerator2 *($bcnn/$denominator2); break;
					case '-' : $numerator = $numerator1 *($bcnn/$denominator1) - $numerator2 *($bcnn/$denominator2); break;
					case '*' : $numerator = $numerator1 *($bcnn/$denominator1) * $numerator2 *($bcnn/$denominator2); break;
					case ":" : $numerator = $numerator1 *($bcnn/$denominator1) * $numerator2 *($bcnn/$denominator2);break;
					default:;
				}
				//$numerator = $numerator1 *($bcnn/$denominator1) + $numerator2 *($bcnn/$denominator2);
				$denominator = $bcnn;
				
				return $numerator . "/" . $denominator;
			}
		?>				
	</body>
</html>