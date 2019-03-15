<?php
session_start();
$_SESSION["lang"] = $_GET["lang"];
$id = $_SESSION['id'];

header("location:../detail.php?id=$id");
session_write_close();
?>