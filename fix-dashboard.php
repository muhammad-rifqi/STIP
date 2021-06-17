<?php
session_start();
include"config.php";


echo $_SESSION['email'];

echo"<br>";

echo "<a href='logout.php'> Logout </a>";


?>