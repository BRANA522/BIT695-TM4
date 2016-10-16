<?php 


 //Above HTML  
  $daynum_error = '';  
 $day_error = '';  
 $time_error = '';  
 $venue_error = '';  
 $numbersOnly = '';
 $output = '';  
 if(isset($_POST["btn_submit"]))  
 {  

   if(empty($_POST["daynum"]))  
      {  
           $daynum_error = "<p>* Please Enter Valid day</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["daynum"]))  
           {  
                $daynum_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
    
	
  
      }  


      if(empty($_POST["day"]))  
		 
      {  
           $day_error = "<p>* Please Enter Valid day</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["day"]))  
           {  
                $day_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
    
	
  
      }  
      
	  
	  if(empty($_POST["time"]))  
      {  
           $time_error = "<p>* Please Enter a Time</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["time"]))  
           {  
                $time_error = "<p>* Only Numbers are allowed</p>";  
           }  
      }  
      
	  
	  
	  
	  
	  
	  if(empty($_POST["venue"]))  
      {  
           $venue_error = "<p>* Please Enter Venue</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["venue"]))  
           {  
                $venue_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
      
	  if($daynum_error == "" && $day_error == "" && $time_error == "" && $venue_error == "")  
      {  
           $sql = "insert into schedule(daynum, day, time, venue)
	values('".$_POST['daynum']."', '".$_POST['day']."', '".$_POST['time']."', '".$_POST['venue']."')
	";
		   
      if(mysqli_query($con, $sql)){
		header('Location:index.php');
		
	}else {
		echo "error".mysqli_error($con);
		
	}
	  } 
 }
?>
