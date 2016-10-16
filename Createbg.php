<!DOCTYPE html>  

<?php   
include 'connect.php';
 include 'valbg.php';
 ?>  


 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">

var ck_id = /^[A-Za-z0-9 ]{3,20}$/;
var ck_numb = /^[A-Za-z0-9 ]{3,20}$/;
var ck_bg = /^[A-Za-z0-9 ]{3,20}$/;

function validate(form){
	var id = form.bg.value;
var numb = form.numb.value;
var bg = form.bg.value;
  
 var errors = [];
 if (!ck_id.test(id)) {
  errors[errors.length] = "Please enter ID.";
 }
 
 
  
  if (!ck_numb.test(numb)) {
  errors[errors.length] = "Please enter number of players.";
 }
 
 
 if (!ck_bg.test(bg)) {
  errors[errors.length] = "Please enter The Board Game.";
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
                <h3 class="text-center">Adding New Board games :   </h3>  
			
	
                <form method="post"  name="form" onsubmit="validate(this)">  

				
				<div class="form-group">  
                          <label>Enter Board Game ID Number : </label>  
                          <input name="id" maxlength="25" />  
                           <?php echo $id_error; ?> 
                     </div>    
				
				
				       <div class="form-group">  
                          <label>Enter Number of Players : </label>  
                          <input name="numb" maxlength="25" />  
                           <?php echo $numb_error; ?> 
                     </div>    
				
                     <div class="form-group">  
                          <label>Enter Board Game : </label>  
                          <input name="bg" maxlength="50" />  
                           <?php echo $bg_error; ?> 
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