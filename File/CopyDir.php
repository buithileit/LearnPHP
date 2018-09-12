<!DOCTYPE html>
<html>
	<body>
		<?php
			function copyDir($source,$dest){
					
				if(is_dir($source)){
					$destPath = $dest . "/". basename($source);
					echo "Create folder : " . $destPath;
					if(!file_exists($destPath)){
						
						mkdir($destPath);
					}
					
					$array = scandir($source);
					//echo '<pre>';
					//print_r($array);
					//echo '</pre>';
					unset($array[0]);
					unset($array[1]);
					foreach ($array as $key => $value){
						$file_source = $source . "/" . $value;
						$file_dest = $destPath . "/" . $value;
						
						if(is_file($file_source)){
							copy($file_source, $file_dest);
						}else if(is_dir($file_source)){
							//echo $file_source . "<br>" . $file_dest;
							copyDir($file_source, $destPath);
						}
					}
				}else{
					copy($source, $dest);
				}
			}
			
			$source = "Sym";
			$dest = "test";
			copyDir($source,$dest);
			//echo mkdir("test/Sym/VD");
			//echo substr(sprintf('%o', fileperms('D:/Sym')), -4);
		?>				
	</body>
</html>