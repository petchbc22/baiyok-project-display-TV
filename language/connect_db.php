<?php

	/*
	// --------- localhost
	$user_db = "root";
	$pass_db = "";
	//
*/

	// --------- Server
	$user_db = "root";
	$pass_db = "";
	//

	mysql_connect("localhost","$user_db","$pass_db");
	mysql_select_db("baiyok_db");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
?>
