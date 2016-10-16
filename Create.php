<!DOCTYPE html>  

<?php   
include 'connect.php';
 include 'val.php';
 ?>  


 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_memberid = /^[0-9 ]{1,20}$/;
var ck_firstname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_familyname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
var ck_phone = /^[0-9_]{1,20}$/;


function validate(form){
var id = form.id.value;
var first = form.first.value;
 var family = form.family.value;
 var email = form.email.value;
 var phone = form.phone.value;

  
 var errors = [];
 
 if (!ck_memberid.test(id)) {
  errors[errors.length] = "Invalid member ID.";
 }
  
 if (!ck_firstname.test(first)) {
  errors[errors.length] = "Please enter First Name.";
 }
 if (!ck_familyname.test(family)) {
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
           <br>  
           <div id="main" >  
                <h3 class="text-center">Adding New Members : </h3>  
			
	
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>Enter Member ID : </label>  
                          <input name="id" maxlength="25" />  
                           <?php echo $id_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter First Name : </label>  
                          <input type="text" name="first" maxlength="35" />  
                          <?php echo $first_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Family Name : </label>  
                          <input type="text" name="family" maxlength="35" />  
                          <?php echo $family_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Email : </label>  
                          <input type="text" name="email" maxlength="100" />  
                          <?php echo $email_error; ?>  
                     </div>  
                     <div class="form-group">  
                          <label>Enter phone : </label>  
                          <input name="phone" maxlength="25" />  
                          <?php echo $phone_error; ?>  
                     </div>  
					
                     <div class="form-group">  
                          <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  