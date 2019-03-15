<?php
session_start();

        if ($_SESSION["lang"] == "EN") {
            include("./language/en.php");
        } elseif ($_SESSION["lang"] == "RU") {
            include("./language/ru.php");
        } elseif ($_SESSION["lang"] == "CH") {
            include("./language/ch.php");
        } else {
            include("./language/th.php");
        }
        ?>