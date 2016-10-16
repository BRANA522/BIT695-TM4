<!DOCTYPE html>  

<?php   
include 'connect.php';
 include 'valschedule.php';
 ?>  


 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
 var ck_daynum = /^[A-Za-z0-9 ]{1,20}$/;
var ck_day = /^[A-Za-z0-9 ]{3,20}$/;
var ck_time =  /^[0-9 ]{1,20}$/;
var ck_venue = /^[A-Za-z0-9 ]{3,20}$/;


function validate(form){
	var daynum = form.day.value;
var day = form.day.value;
var time = form.time.value;
 var venue = form.venue.value;
 
  
 var errors = [];
 
  if (!ck_daynum.test(daynum)) {
  errors[errors.length] = "Invalid number.";
 }
  
 
 if (!ck_day.test(day)) {
  errors[errors.length] = "Invalid Day.";
 }
  
 if (!ck_time.test(time)) {
  errors[errors.length] = "Please enter Time.";
 }
 if (!ck_venue.test(venue)) {
  errors[errors.length] = "Please enter Venue.";
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
                <h3 class="text-center">Adding a Schedule :   </h3>  
			
	
                <form method="post"  name="form" onsubmit="validate(this)">  

				
				<div class="form-group">  
                          <label>Enter Number of day : </label>  
                          <input  name="daynum" />  
                           <?php echo $daynum_error; ?> 
                     </div>        
				
                     <div class="form-group">  
                          <label>Enter Day : </label>  
                          <input  type="text" name="day" maxlength="35" />  
                           <?php echo $day_error; ?> 
                     </div>                           
                     <div class="form-group">   
                          <label>Enter Time : </label>  
                          <input name="time" />  
                          <?php echo $time_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Venue : </label>  
                          <input type="text" name="venue" maxlength="35" />  
                          <?php echo $venue_error; ?>  
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