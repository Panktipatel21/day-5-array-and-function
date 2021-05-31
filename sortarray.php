<?php
//sorting array
//arrange number from lowest to highest order manner
$arr = array(80,60,50,40,8,74);
sort($arr);
echo "sorting array <br/>";
print_r($arr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//reverse sorthing
//sort an array in reverse or descending order
$arr = array(80,60,50,40,8,74);
rsort($arr);
echo "sorting reverse array <br/>";
print_r($arr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//ascending order according to the values. 
//The indexes will be preserved.
$arr = array(80,60,50,40,8,74);
asort($arr);
echo "ascending order sorting array <br/>";
print_r($arr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//key sort
//array in ascending order according to the keys.
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
echo " key sorting array <br/>";
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>



<?php
//key sort
//array in ascending order according to the keys.
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
echo " key sorting array <br/>";
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>



<?php
//array_key_exists ()
//return either "true" or "false" when it runs.

$arr = array("a" => "apple", "b" => "banana");
echo " array key exit <br/>";
echo array_key_exists('a',$arr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array_change_key_case()
// used to change all keys of a given array to lower case or upper case.
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
echo " array change key case <br/>";
print_r($uppercase);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array_combine()
//used to creates an array by using one array for keys and another for its values.
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
echo " array_combine <br/>";
print_r($NewVar);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array flip
$arr = array("a" => "pankti", "b" => "Mango", "c" => "computer");
$fliparray = array_flip($arr);
echo " array flip  <br/>";
print_r($fliparray);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array diff
//Compare the values of two arrays, and return the differences
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
echo " array differences  <br/>";
print_r($diff);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array_intersect
//
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
echo " array_intersect   <br/>";
print_r(array_intersect($arr1,$arr2));
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array_values
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
echo " array value   <br/>";
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//push array
$a=array("c","c++");
array_push($a,"java","php");
echo "push  array <br/>";
print_r($a);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//array pop
$a = array("c", "c++", "Java", "PHP", "ASP");
echo "pop  array <br/>";
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//explode array
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
echo "explode  array <br/>";
print_r($arr);
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


<?php
//implode array
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo "implode  array: <br/>";
echo $mystring;
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>




<form method="post">
Programming :
C<input type="checkbox" name="cbox[]" value="c">
C++<input type="checkbox" name="cbox[]" value="c++">
PHP<input type="checkbox" name="cbox[]" value="php">
<input type="submit">
</form>
<?php
if($_POST)
{
$programming= $_POST['cbox'];
$string = implode(",", $programming);
echo $string;
}
?>






















