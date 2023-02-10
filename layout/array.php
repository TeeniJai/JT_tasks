<?php $title = "Exercise 5";
include "header.php"?>
<h3>5.1 Write a php script to display courses as list.</h3>
<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $value) {
    echo "<li> $value";
}
?>
<h3>5.2 Delete an element from the array</h3>
<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[3]);
foreach ($courses1 as $value) {
    echo "<li> $value";
}
?>
<h3>5.3 Sort the following array</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
print_r(array_values($courses3));
echo "<br>a) by value<br>";

ksort($courses3);
print_r(array_values($courses3));
echo "<br>b) by key<br>";

arsort($courses3);
print_r(array_values($courses3));
echo "<br>c) descending by value<br>";

krsort($courses3);
print_r(array_values($courses3));
echo "<br>d) descending by key"
?>

<h3>5.4 Change the following array's all values to upper case.</h3>
<?php
$courses4=array("php", "html", "javascript", "cms", "project");
foreach ($courses4 as $value) {
    echo strtoupper($value)." ";
}
?>

<h3>5.5 List all your favorite colors and their hexadecimal equivalents.</h3>
<?php
$colors = array("blue" => "#0000FF", "purple" => "#A020F0", "yellow" => "#FFFF00");
print_r($colors);
?>
<h3>PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
<?php

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73,
85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : it breaks the string into an array along a specified separator
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? it counts the number of values in the array
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?  it sorts the values in the array in an ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop : it prints the final five values of the array
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<?php include "footer.php" ?>