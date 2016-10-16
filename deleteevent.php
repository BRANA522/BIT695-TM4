<?php 
include 'connect.php';


 if(isset($_GET['date'])){
	 $sql = "delete from events where date =".$_GET['date'];
	 if(mysqli_query($con, $sql)){
		 header('Location:index.php');
		 }else{
			echo "Error ".mysqli_error($con);
			 
 }}