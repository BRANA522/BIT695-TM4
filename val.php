<?php 


 //Above HTML  
 $id_error = '';  
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
      
	  if(empty($_POST["email"]))  
      {  
           $email_error = "<p>* Please Enter a valid Email</p>";  
      }  
      else  
      {  
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                $email_error = "<p>* Invalid Email format</p>";  
           }  
      }  
      
	  
	  if(empty($_POST["phone"]))  
      {  
           $phone_error = "<p>* Please Enter Phone a Number</p>";  
      }  
      else  
      {  
           if(!preg_match("/^[a-zA-Z 0-9]*$/", $_POST["phone"]))  
           {  
                $phone_error = "<p>* Only Numbers are allowed</p>";  
           }  
      }  
      
	  if($id_error == "" && $first_error == "" && $family_error == "" &&$email_error == "" && $phone_error == "")  
      {  
           $sql = "insert into afplayers(id, first, family, email, phone)
	values('".$_POST['id']."', '".$_POST['first']."', '".$_POST['family']."', '".$_POST['email']."', '".$_POST['phone']."')
	";
		   
      if(mysqli_query($con, $sql)){
		header('Location:index.php');
		
	}else {
		echo "error".mysqli_error($con);
		
	}
	  } 
 }
?>
