<?php
session_start();
        if ($_SESSION["lang"] == "EN") {
            include("en.php");
        } elseif ($_SESSION["lang"] == "RU") {
            include("ru.php");
        } elseif ($_SESSION["lang"] == "CH") {
            include("ch.php");
        } else {
            include("th.php");
        }
        ?>