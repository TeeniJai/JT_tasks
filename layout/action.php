<?php include "header.php" ?>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];

echo "<h3>Your name is $fname $lname </h3><br>";
echo "<h3>Your fav color is $color and your bday is $bdate</h3>";

?>

<?php include "footer.php" ?>