<?php
session_start();
$_SESSION["lang"] = $_GET["lang"];
$d_id = $_SESSION['d_id'];

header("location:../sub.php?d_id=$d_id");
session_write_close();
?>