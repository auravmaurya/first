<html>
<head>
	<title>Learn pHp</title>
</head>
<body>
<form action = "hello.php" method = "post">
	Name   :<input type ="text" name ="name"><br><br>
	Email  :<input type= "text" name="email"><br><br>
	Website:<input type= "text"  name="web"><br><br>
	Comment:
	<textarea name="comment" rows="5" cols="40"></textarea><br><br>
	Gender :
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="Male">Male<br>
	<input type = "submit">
</form>


<?php
define('Greetings', 'My world');

echo Greetings;


$txt= "Learn pHp";
$txt2= "Cool";

echo "<h1>$txt</h1>";
echo "$txt2"."<br>";

/*
$lan = array("c" ,"pHp","matlab","c++" );

rsort($lan);

foreach ($lan as $value) {
	echo "$value"."<br>";
}
echo "<br>";


/* if-else

 $k=208;
if($k < 100)
{
	echo "true"."<br>";
}
elseif ($k < 200) {
	echo "string"."<br>";
}

else {
echo "keep calm";	
	}

$hello="us";
switch ($hello) {
	case 'india':
		echo "my country";
		break;
	
	default:
		echo "Not my country";
		break;
}
/*
$r= 1;
while ( $r <= 10) {
	echo "value = $r"."<br>" ;
$r++;
}

for ($i=0 ; $i < 5  ; $i++) { 
	echo "$i"."<br>";
}
function fname($jh)
{
echo "$jh"."Clarke"."<br>";
}
fname("hello");
fname("jeke");
*/
?>

</body>
</html>