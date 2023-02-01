<?php $title = "Indivitual tasks 1"
include "header.php" ?>
    <h3>Write a simple PHP script to print your information (Name and your groupid).</h3>
<?php
echo "Jenina Tiainen <br>";
echo "BBCAP22"
?> 
<h3>Write PHP code to display the following message.</h3>
<?php
echo "Hello world! My name is David"
?>
<h3>Write the PHP code in to display the current date.</h3>
<?php
echo date("d.m.Y");
?>  
<h3>3.4 variable in php</h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>". $title1. "</h1>";
?>

<h3>3.5 Table & Variables</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 3;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>
<h3> 4 screenshot of the depelopment environment</h3>
<img src="dockerSS.png" alt="screenshot of docker">


<?php include "footer.php" ?>