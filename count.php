<?php
//count function is use to count the number of elements in an array
$arr = array('php','c','c++','java','Android');
echo count($arr);
?>


<?php
$arr = array("C","php","C","c++","java","Android","php");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>