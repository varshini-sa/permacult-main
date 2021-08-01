<?php
	$conn=new mysqli("localhost","root","","permacult");
    if ($conn-> connect_error)
    {
    	die("connection failed:". $conn-> connect_error);
    }
?>