<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Patroon04</title>
</head>
<body>

	<?php
	const AANTAL = 9;
	    for ($i =0 ; $i < AANTAL; $i++){
	        for($j =0 ; $j < 8 - $i +1; $j++){
	      		echo ("<div class ='circle'></div>");
	        }
	        echo ("<br>");
	        echo ("<br>");
	        echo ("<br>");
	    }
    ?> 

</body>
</html>