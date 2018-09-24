<!DOCTYPE html>
<html>
	<body>
		<form method = "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type="text" name="fname">
			<input type="submit">
		</form>

		<?php
		//Video 57
			$strDate = "6-10-2014";
			echo formatDate($strDate, "Y/m/d","m-d-Y");
			/**
			 * $strDate : is str date
			 * $formatStrDate : is format of $strDate
			 * $format : format want to return
			 * return date with format is $format
			 */
			function formatDate($strDate, $format, $formatStrDate="d/m/Y"){
				$date = date_parse_from_format($formatStrDate, $strDate);
				$timeStamp = mktime($date["hour"], $date["minute"], $date["second"], $date["month"], $date["day"], $date["year"]);
				return date($format, $timeStamp);
			}

		?>				
	</body>
</html>