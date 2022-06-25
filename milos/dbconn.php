<?php

	# Stop Hacking attempt

	if(!defined('__APP__')) {

		die("Hacking attempt");

	}

	

	# Connect to MySQL database

	$MySQL = mysqli_connect("localhost","root","","baza") or die('Error connecting to MySQL server.');