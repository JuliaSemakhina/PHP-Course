<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	

	<form action="script.php" method="get">
		Name: <input type="text" name="name">
		<br>
		Age: <input type="number" name="age">
		<br>
		<input type="submit">
	</form>
	<br>
	Your name is: 
	<?php 
	echo $_GET["name"];
	?>
	<br>
	Your age is: 
	<?php 
	echo $_GET["age"];
	?>
	<br>


	<form action="script.php" method="get">
		Color: <input type="text" name="color"> <br>
		Plural noun: <input type="text" name="pluralNoun"> <br>
		Animal: <input type="text" name="animal"> <br>
		<input type="submit">
	</form>
	<br>

	<?php
		$color = $_GET["color"];
		$pluralNoun = $_GET["pluralNoun"];
		$animal = $_GET["animal"];

		echo "Roses are $color <br>";
		echo "$pluralNoun are blue <br>";
		echo "I love $animal <br>";
	?>


<!-- 	<form action="script.php" method="get">
		<input type="number" name="num1">
		<br>
		<input type="number" name="num2">
		<br>
		<input type="submit">
	</form>
	<br>
	The result: 
	<?php
	echo $_GET["num1"] + $_GET["num2"];
	 ?>
	 <br> -->

<!-- Creating variables 

	<?php
	$characterName = 'John';
	$characterAge = 35;
	echo "There once was a man named $characterName <br>";
	echo "He was years old $characterAge <br>";
	echo('<h1>My site and</h1>');
	echo '<hr>';
	echo "<p>The secret site!</p>";

	$phrase = "To be or not to be";
	echo "$phrase or <br>";
	$age = 43.5;
	echo $age;


	echo "<br> Like anyone in the world can do <br>";
	echo strtoupper($phrase);
	echo "<br> strtolower <br>";
	echo "<br> strlen() <br>";
	$phrase[1] = "W";
	echo $phrase;
	echo str_replace("be", "wish", $phrase);
	echo substr($phrase, 3, 2);
	echo "<br>";
	echo 4-30;

	$num = 15;
	$num++;
	echo "<br> $num<br>";
	echo abs(-100);
	echo pow(2, 3);
	echo sqrt(144);
	echo max(2,10);
	echo round(3.2);
	echo ceil(3.3);

	echo "<br> $phrase <br>";



	 ?>-->
	
</body>
</html>