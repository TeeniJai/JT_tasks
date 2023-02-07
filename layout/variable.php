<?php $title = "Exercise 3";
include "header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators</h3>

<h2>3.1 Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using h3
    tag: Hello …., You are welcome to my site.
</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="fname" requierd placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
        <div class="row">
            <div class="col">
                <input type="date" name="bdate" required placeholder="Birthday" class="form-control"><br>
            </div>
            <div class="col">
                <input type="color" name="color" requierd placeholder="Color" class="form-control"><br>
            </div>
            <input type="submit" value="Submit">
        </div>
    </div>
</form>
<h3>3.3 Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h3>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Birthday</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Sandcat</td>
        <td>Sandcat</td>
        <td>Sandcat</td>
    </tr>
    <tr>
        <td>Yes</td>
        <td>Perhaps</td>
        <td>Maybe</td>
    </tr>
</table>
<h3>3.4 Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string</h3>
<?php 
$txt1 = "Some things are";
$txt2 = "less complicated than you think";
echo "$txt1 $txt2<br>";
echo strlen("$txt1 $txt2");
?> 
<h3>3.5 Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
echo ($num1 + $num2 + $num3);
?>
<h3>3.6 Write a PHP script to detect the browser being used to view your pages.</h3>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
?>
<h3>3.7 Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h3>
<?php


?>
<?php include "footer.php" ?>