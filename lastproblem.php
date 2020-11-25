<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.div{
		color:#53B0AE;
			pantone_value:15-5217;
		}
	</style>
</head>
<body>
	<div>
	<?php

		
		$arr=array("id"=>6,"name"=>"blue turquoise","year"=>2005);
		foreach ($arr as $key => $value) {
			
			echo "$key : "."$value"."<br>";
		}
		$arr1=array("url"=>"https://reqres.in/#support-heading","text"=>"To keep ReqRes free, contributions towards server costs are appreciated!");

		foreach ($arr1 as $key => $value) {
			
			echo "$key : "."$value"."<br>";
		}
	?>
</div>
</body>
</html>
