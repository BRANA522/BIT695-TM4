<?php 


 //Above HTML  
 $date_error = '';  
 $event_error = '';  
 $cost_error = '';  
 $location_error = '';  
 
 $numbersOnly = '';
 $output = '';  
 if(isset($_POST["btn_submit"]))  
 {  
      if(empty($_POST["date"]))  
      {  
           $date_error = "<p>* Please Enter Valid Date</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["date"]))  
           {  
                $date_error = "<p>Only Numbers and whitespace allowed</p>";  
           }
	
	
  
      }  
      
	  if(empty($_POST["event"]))  
      {  
           $event_error = "<p>* Please Enter The event</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["event"]))  
           {  
                $event_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  
	  if(empty($_POST["cost"]))  
      {  
           $cost_error = "<p>* Please Enter Cost</p>";  
      }  
      else  
      {  
          if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["cost"]))  
           {  
                $cost_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  if(empty($_POST["location"]))  
      {  
           $location_error = "<p>* Please Enter a Valid Location</p>";  
      }  
      else  
      {  
              if(!preg_match("/^[a-zA-Z ]*$/", $_POST["location"]))  
           {  
                $location_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
      
	  if($date_error == "" && $cost_error == "" && $event_error == "" && $location_error == "")  
      {  
           $sql = "insert into events(date, event, cost, location)
	values('".$_POST['date']."', '".$_POST['event']."', '".$_POST['cost']."', '".$_POST['location']."')
	";
		   
      if(mysqli_query($con, $sql)){
		header('Location:index.php');
		
	}else {
		echo "error".mysqli_error($con);
		
	}
	  } 
 }
?>
