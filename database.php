<?php
	session_start();
	
	$host = "finalexamapplication-mysqldbserver.mysql.database.azure.com";
	$database = "dbFinalExam";
	$user = "yye2942@finalexamapplication-mysqldbserver";
	$password = "skatkwkd309^^";

	$connection = mysqli_connect($host, $user, $password, $database);
