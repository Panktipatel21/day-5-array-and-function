<?php
//numerical Array
//method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "P";
$a[4] = "pankti";
//method 2
//Index Dynamic array
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "P";
$a[] = "pankti";
//method 3
//Always use this method to create an array
$a = array(10,20,20.50,"c","php","pankti");
//print array value
echo $a[3];
//print whole array
for($i=0;$i<count($a);$i++)
{
	echo "<br/>".$a[$i];
}
//3 Inbuilt Functions toDebug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>