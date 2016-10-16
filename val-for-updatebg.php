<?php 



 //Above HTML  
  $numb_error = '';  
 $bg_error = '';  
 $id_error = '';  
 $numbersOnly = '';
 $output = '';  
 if(isset($_POST["btn_submit"]))  
 {  

   if(empty($_POST["numb"]))  
      {  
           $numb_error = "<p>* Please Enter Valid Board Game</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["numb"]))  
           {  
                $numb_error = "<p>Only Numbers and whitespace allowed</p>";  
           }
	  }
	if(empty($_POST["id"]))  
      {  
           $id_error = "<p>* Please Enter Valid Board Game</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["id"]))  
           {  
                $id_error = "<p>Only Numbers and whitespace allowed</p>";  
           }
	

      if(empty($_POST["bg"]))  
      {  
           $bg_error = "<p>* Please Enter Valid Board Game</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["bg"]))  
           {  
                $bg_error = "<p>Only Numbers and whitespace allowed</p>";  
           }
	
	
  
      }  
      
	  if($numb_error == "" && $bg_error == "")  
      {  
        

	$sql = "update boardgame set bg = '".$_POST['bg']."',
		                          numb = '".$_POST['numb']."'
								   

								   
								   
	           where id = '".$_POST['id']."'
		";
	
	if(mysqli_query($con, $sql)){
		header('Location:index.php');
	}else{
		echo "Error ".mysqli_error($con);
	}
}
 }}
?>
