<?php 


 //Above HTML  
 $id_error = '';  
 $first_error = '';  
 $family_error = '';  
 $bg_error = '';  
 $bg2_error = '';  
 $bg3_error = '';  

 $numbersOnly = '';
 $output = '';  
 if(isset($_POST["btn_submit"]))  
 {  
      if(empty($_POST["id"]))  
      {  
           $id_error = "<p>* Please Enter Valid ID</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["id"]))  
           {  
                $id_error = "<p>Only Numbers and whitespace allowed</p>";  
           }
	
	
  
      }  
      
	  if(empty($_POST["first"]))  
      {  
           $first_error = "<p>* Please Enter First Name</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["first"]))  
           {  
                $first_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  
	  if(empty($_POST["family"]))  
      {  
           $family_error = "<p>* Please Enter Last Name</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["family"]))  
           {  
                $family_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  if(empty($_POST["bg"]))  
      {  
           $bg_error = "<p>* Please Enter a valid Board Game</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["bg"]))  
           {  
                $bg_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  	  if(empty($_POST["bg2"]))  
      {  
           $bg2_error = "<p>* Please Enter a valid Board Game</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["bg2"]))  
           {  
                $bg2_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  	

	  if(empty($_POST["bg3"]))  
      
	  
	  {  
           $bg3_error = "<p>* Please Enter a valid Board Game</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z ]*$/", $_POST["bg3"]))  
           {  
                $bg3_error = "<p>* Only Letters and whitespace allowed</p>";  
           }  
      }  
      
	  if($id_error == "" && $first_error == "" && $family_error == "" && $bg_error == "" && $bg2_error == "" && $bg3_error == "")  
      {  
        
	$sql = "update afplayers set first = '".$_POST['first']."',
		                             family = '".$_POST['family']."',
	                                 bg = '".$_POST['bg']."',
	                                 bg2 = '".$_POST['bg2']."',
	                                 bg3 = '".$_POST['bg3']."'
	                               
	           where id = '".$_POST['id']."'
	";
	if(mysqli_query($con, $sql)){
		header('Location:index.php');
	}else{
		echo "Error ".mysqli_error($con);
	}
}
 }
?>
