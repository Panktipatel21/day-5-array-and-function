<?php
//reverse array
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
echo "reverse array is <br/>";
print_r($revarr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//The in_array() array function is used when we wish to look inside of an array to see if a certain value exists. This function will return either "true“(1) or "false" when It runs.
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo "in_array function is <br/>"; 
echo $temp;
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>

<?php
//Returns Array Index 
//it use select one or more keys from an array at random.
$arr = array('c', 'c++', 'java', 'android', 'php');
echo "Returns Array Index <br/> ";
$indexofarray = array_rand($arr);
echo $arr[$indexofarray];
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//Returns Array Index
//Select multiple keys at random
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2); 
echo "Returns Array Index ";
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array_unique ()
//unique array ia ues to  remove all duplicate values from within an array.
$arr = array('c', 'c++','android', 'java', 'android', 'php', 'c', 'php');
echo "remove all duplicate values <br/>";
print_r(array_unique($arr));
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//merge array
//merge multiple arrays.
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
echo "merge array <br/>";
print_r($NewArr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//search array
// Return Index
 // search in an array for a specific value.
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo "search array <br/>";
echo $check;
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//range 
//create a new array using a specified range. You can use letter or number ranges.

$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 

//select 1 to 11 range
//create a new array using a specified range. You can use letter or number ranges.
$year = range(1,100);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<select>";
foreach ($year as $value) 
{
echo 
"<option>$value</option>";
}
echo "</select>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
// shuffle() array function
//randomly shuffle the order of the elements in an array.
$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
shuffle($myArray); 
echo "shuffle() array function";
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//compact array
$name = "pankti";
$subject = "php";
$arr = compact("name", "subject");
echo "compact array <br/>";
print_r($arr);
?>