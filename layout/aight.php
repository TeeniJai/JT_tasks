<?php
include "header.php";

$fname = $_POST['fname'];
$age = $_POST['age'];
if ($age < 18)
    echo "not eligible for voting";
    else echo "eligible for voting";

include "footer.php";
?>