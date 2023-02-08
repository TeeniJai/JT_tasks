<?php $title = "Exercise 4";
include "header.php" ?>
<h3>4.1</h3>
<?php
$month = date("F");

if ($month == "August") {
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, this is $month so I don't have any holidays...";
}
?>

<h3>4.2</h3>
<?php
$color = "red";
if ($color == "red")
    echo "The color is red.";
    else echo "The color is not red.";
?>

<h3>4.3</h3>
<?php
$grade = 50;
switch(true){
    case ($grade >= 80):
        echo "Excellent!";
        break;
    case ($grade >= 70):
        echo "Great";
        break;
    case ($grade >= 60):
        echo "Good";
        break;
    case ($grade >= 50):
        echo "Pass";
        break;
    case ($grade < 50):
        echo "Fail";
    }
?>

<h3>4.4</h3>

<form action="aight.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="fname" requierd placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="number" name="age" required placeholder="age" class="form-control">
        </div>
            </div>
            <input type="submit" value="Submit">
        </div>
    </div>
</form>


<h3>4.5</h3>
<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

switch (true) {
    case strpos($user_agent, 'Firefox'):
        echo "You are using Mozilla FireFox!";
        break;
    case strpos($user_agent, 'Chrome'):
        echo "You are using Google Chrome!";
        break;
    case strpos($user_agent, 'Edg'):
        echo "You are using Microsoft Edge!";
        break;
    default:
        echo "Unable to fetch browser info";
        break;
}
?>
<?php include "footer.php" ?>