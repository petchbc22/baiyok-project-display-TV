<?php
require('connect_db.php');
$strSQL_direction = "SELECT * FROM direction";
$objQuery_direction = mysql_query($strSQL_direction) or die ("Error Query [".$strSQL_direction."]");

?>