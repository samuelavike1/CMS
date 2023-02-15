<?php
$conn = mysqli_connect("localhost", "root", "", "cmsdb");

if(!$conn){
	die("Connection Failed".mysqli_connec_error());
}
?>