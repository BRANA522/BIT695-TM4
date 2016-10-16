<?php 
include 'connect.php';


 if(isset($_GET['daynum'])){
	 $sql = "delete from schedule where daynum =".$_GET['daynum'];
	 if(mysqli_query($con, $sql)){
		 header('Location:index.php');
		 }else{
			echo "Error ".mysqli_error($con);
			 
 }}