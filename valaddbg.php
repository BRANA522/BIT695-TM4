<?php 


 //Above HTML  
 $id_error = '';  
 $bg_error = '';  
 $first_error = '';  
 $family_error = '';  
 $email_error = '';  
 $phone_error = '';
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
  
 if(empty($_POST["bg"]))  
      {  
           $bg_error = "<p>* Please Enter Valid ID</p>";  
      }  
      else  
      {  
         
           if(!preg_match("/^[a-zA-Z 0-9 ]*$/", $_POST["bg"]))  
           {  
                $bg_error = "<p>Only Numbers and whitespace allowed</p>";  
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
      

      
	  if($id_error == "" && $first_error == "" && $family_error == "" && $bg_error == "")  
      {  
           $sql = "insert into afplayers(id, first, family, bg)
	values('".$_POST['id']."', '".$_POST['first']."', '".$_POST['family']."', '".$_POST['bg']."')
	";
		   
      if(mysqli_query($con, $sql)){
		header('Location:index.php');
		
	}else {
		echo "error".mysqli_error($con);
		
	}
	  } 
 }
?>
