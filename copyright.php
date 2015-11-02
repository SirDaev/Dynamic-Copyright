<?php

	$startDate = "2010"; //This is the beginning date of the Copyright date range
	$siteName = "DaveJudd.com"; //This is the name of your website displaying the copyright

	echo "Copyright &copy; " . $startDate;
	
	if (date("Y") > $startDate) {
		echo "-".date("Y");
	}
	
	echo " " . $siteName;
	echo " All Rights Reserved.";
	
?>
