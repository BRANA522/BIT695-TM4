<!DOCTYPE html>  

<?php   
include 'connect.php';
 include 'valhs.php';
 ?>  


 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_score = /^[0-9_]{1,20}$/;
var ck_first = /^[A-Za-z0-9 ]{3,20}$/;
var ck_family = /^[A-Za-z0-9 ]{3,20}$/;
var ck_id = /^[0-9 ]{1,20}$/;

function validate(form){
var score = form.score.value;
var id = form.id.value;
var first = form.first.value;
 var family = form.family.value;
 
  
 var errors = [];

 if (!ck_score.test(score) {
  errors[errors.length] = "Incorrect High Score.";
 } 
 if (!ck_id.test(id)) {
  errors[errors.length] = "Invalid member ID.";
 }
  
 if (!ck_first.test(first)) {
  errors[errors.length] = "Please enter First Name.";
 }
 if (!ck_family.test(family)) {
  errors[errors.length] = "Please enter Family Name.";
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
                <h3 class="text-center">Adding A new High Score : </h3>  
			
	
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>Enter High Score : </label>  
                          <input name="score" />  
                           <?php echo $score_error; ?> 
                     </div>                           

					   <div class="form-group">  
                          <label>Enter Member ID : </label>  
                          <input  name="id" />  
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
                          <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  