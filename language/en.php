<?php
require('connect_db.php');
$strSQL = "SELECT * FROM place_en";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


$strSQL_direction = "SELECT * FROM direction";
$objQuery_direction = mysql_query($strSQL_direction) or die ("Error Query [".$strSQL_direction."]");


	// $strTitle = "Welcome to My Web Site";
	// $strHome = "Home";
	// $strService = "Service";
	// $strAbout = "About Us";
	// $strContact = "Contact Us";
	// $str_Soundwelc = "media/en.mp3";
	$btnmainNorth = "North";
	$btnmainSouth = "South";
	$btnmainEast = "East";
	$btnmainWest = "West";
	// $headingNorth = "View from the north";
	// //** สมมุติค่ามาจาก Database ที่ได้จากการ Query ***//
	// $result["DETAIL_EN"] = "This is content English";

	// $strDetail = $result["DETAIL_EN"];
	// $north = "media/NORE.WAV";
	// // text in north view
	// $Chitralada = "Chitralada Palace";
	// $suanpakkad = "Suan Pakkad Palace";
	// $dusit = "Dusit Zoo";
	// $NationalLibrary = "‎National Library of Thailand";
	
?>

