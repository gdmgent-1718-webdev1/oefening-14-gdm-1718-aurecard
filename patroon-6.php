<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Patroon06</title>
</head>
<body>

	<?php
	const AANTAL = 10;
	    for ($i =1 ; $i < AANTAL; $i++){
	        for($j =1 ; $j < AANTAL; $j++){
		      	if ($j%3 == 0){
		        	$color = "blue";
		        }elseif ($j%3 == 1){
		            $color = "red";
		        }elseif ($j%3 == 2){
		            $color = "green";
		        }
		        echo ("<div class ='circle' style=background:$color;></div>");
	    	}
		}
    ?> 

</body>
</html>