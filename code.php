<?php
require 'dbcon.php';

session_start();

if(isset($_POST['submit_conplaint'])){
	$name = $_POST['name'];
	$index_number = $_POST['index_number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$query="INSERT INTO tbl_complaint(name,index_number,subject,message)
			VALUES('$name','$index_number','$subject','$message')";

	$query_run = mysqli_query($conn, $query);

	if ($query_run){
		 $_SESSION['notification'] ="Complaint Submitted succesfully, Please we'll get back to you shortly";
		header("Location: index.php");
		exit(0);
	} else{
		
	   $_SESSION['notification']="Sorry, Complaint Not Submitted, Please try again Later";

		header("Location: index.php");
		exit(0);
	}
}
?>