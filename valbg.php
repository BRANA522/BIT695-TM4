<?php 


 //Above HTML  
   $id_error = '';  
  $numb_error = '';  
 $bg_error = '';  
 $numbersOnly = '';
 $output = '';  
 if(isset($_POST["btn_submit"]))  
 {  
  if(empty($_POST["id"]))  
      {  
           $id_error = "<p>* Please Enter number of players</p>";  
      }  
      else  
      {  
      if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["id"]))    
           {  
                $id_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  


      if(empty($_POST["numb"]))  
      {  
           $numb_error = "<p>* Please Enter number of players</p>";  
      }  
      else  
      {  
      if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["numb"]))    
           {  
                $numb_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	 
	 
   if(empty($_POST["bg"]))  
      {  
           $bg_error = "<p>* Please Enter Board Game</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["bg"]))  
           {  
                $bg_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  

	  
      
	  if($id_error == "" && $numb_error == "" && $bg_error == "")  
      {   
           $sql = "insert into boardgame(id, numb, bg)
	Values('".$_POST['id']."', '".$_POST['numb']."', '".$_POST['bg']."')
	";
		   
      if(mysqli_query($con, $sql)){
		header('Location:index.php');
		
	}else {
		echo "error".mysqli_error($con);
		
	}
	  } 
 }
?>