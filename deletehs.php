<?php 
include 'connect.php';


 if(isset($_GET['id'])){
	 $sql = "delete from highscore where id =".$_GET['id'];
	 if(mysqli_query($con, $sql)){
		 header('Location:index.php');
		 }else{
			echo "Error ".mysqli_error($con);
			 
 }} 