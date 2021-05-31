<?php
//associative Array
//key = value
//method 1
$a[0] = 10;
$a['P'] = "Pankti";
$a['php'] = "Web Development";
$a[1] = "one";
$a[50] = 10.40;
//method 2
//Always use this method to create an array
$a = array(
0 => 10,
"P" => "Pankti",
"php" => "Web Development",
1 => "one",
50 => 10.40
);
//print value
echo "P for ".$a['P'];

foreach ($a as $value) {
	echo "<br> value is  $value";
}
foreach ($a as $key => $value){
	echo "<br> key is <b>$key</b> and value is <b>$value</b>";
}
?>