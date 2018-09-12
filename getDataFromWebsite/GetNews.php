<!DOCTYPE html>
<html>
	<head>
		<style >
			/* LIST #4 */
			#list4 { width:320px; font-family:Georgia, Times, serif; font-size:15px; }
			#list4 ul { list-style: none; }
			#list4 ul li { }
			#list4 ul li a { display:block; text-decoration:none; color:#000000; background-color:#FFFFFF; line-height:30px;}
			#list4 ul li a:hover { color:#FF0000; background-image:url(../images/hover.png); background-repeat:repeat-x; }
			#list4 ul li a strong { margin-right:10px; }
			#list4 ul li div {  border-bottom-style:solid; border-bottom-width:5px; border-bottom-color:#CCCCCC; padding-left:10px;padding_bottom:10px; cursor:pointer;  }
			/*#list4 ul{padding-bottom: 10px;}*/
		</style>
	</head>
	<body>
		<?php
			function getNewsDanTri(){
				$content = file_get_contents("http://dantri.com.vn/the-thao.htm");
				$pattern = '#class="mt3 clearfix eplcheck">.*src="(.*)".*class="fon6".*>(.*)</a>.*class="fon5 wid324 fl">(.*)<#imsU';
				preg_match_all($pattern, $content, $dataList);
				
				$result = array();
				
				foreach($dataList[1] as $key => $value){
					$result[$key]["image"] = $dataList[1][$key];
					$result[$key]["title"] = $dataList[2][$key];
					$result[$key]["description"] = $dataList[3][$key];
				}
				return $result;
			}
			$data = getNewsDanTri();
		?>
	<div id="list4">
	   <ul>
	   <?php
			foreach($data as $key => $value){
		?>
		  <li><img src="<?php echo $value["image"];?>" width="130" height="100">
				<a href="#"><strong><?php echo $value["title"];?></strong></a>
				<div><?php echo $value["description"];?></div>
		  </li>
		<?php
		  }
		?>
		 
	   </ul>
	</div>
		
	</body>
</html>