<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-update.php';

	
 $id = '';
 $first = '';
 $family = '';
 $email = '';
 $phone = '';
 if(isset($_GET['id'])){
	 $sql = "select id, first, family, email, phone from afplayers
           where id=".$_GET['id'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		 $id = $row['id'];
		$first = $row['first'];
		$family = $row['family'];
		$email = $row['email'];
		$phone = $row['phone'];
		
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_id = /^[0-9 ]{1,20}$/;
var ck_first = /^[A-Za-z0-9 ]{3,20}$/;
var ck_family = /^[A-Za-z0-9 ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
var ck_phone = /^[0-9_]{1,20}$/;


function validate(form){
var id = form.id.value;
var first = form.first.value;
 var family = form.family.value;
 var email = form.email.value;
 var phone = form.phone.value;

  
 var errors = [];
 
 if (!ck_id.test(id)) {
  errors[errors.length] = "Invalid member ID.";
 }
  
 if (!ck_first.test(first)) {
  errors[errors.length] = "Please enter First Name.";
 }
 if (!ck_family.test(family)) {
  errors[errors.length] = "Please enter Family Name.";
 }

 if (!ck_email.test(email)) {
  errors[errors.length] = "Incorrect Email format.";
 }

 if (!ck_phone.test(phone)) {
  errors[errors.length] = "Please enter Phone Number";
 }
 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Correct the Following...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
}
</script>
  
   
	
	</head>


  <body>  
    
  <div id="main" >  


<BR>
<h2>Editing The Selected Member</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>Enter Member ID : </label>  
                          <input name="id" value="<?=$id?>" maxlength="35" />  
                           <?php echo $id_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter First Name : </label>  
                          <input type="text" value="<?=$first?>" name="first" maxlength="35" />  
                          <?php echo $first_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Family Name : </label>  
                          <input type="text" value="<?=$family?>" name="family" maxlength="35" />  
                          <?php echo $family_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Email : </label>  
                          <input type="text" value="<?=$email?>" name="email" maxlength="50" />  
                          <?php echo $email_error; ?>  
                     </div>  
                     <div class="form-group">  
                          <label>Enter phone : </label>  
                          <input name="phone" value="<?=$phone?>" maxlength="25" />  
                          <?php echo $phone_error; ?>  
                     </div>  
					
                     <div class="form-group">  
               
				     <input type="hidden" name="txt_id" value="<?=$id?>"/>
                           <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  

