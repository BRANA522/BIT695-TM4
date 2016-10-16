<!DOCTYPE html>  

<?php   
include 'connect.php';
 include 'valevent.php';
 ?>  


 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_date= /^[0-9 ]{1,20}$/;
var ck_event = /^[A-Za-z0-9 ]{3,20}$/;
var ck_cost = /^[A-Za-z0-9 ]{1,20}$/;
var ck_location = /^[A-Za-z0-9 ]{3,20}$/;

function validate(form){
var date = form.date.value;
var event = form.event.value;
 var cost = form.cost.value;
 var location = form.location.value;
 

  
 var errors = [];
 
 if (!ck_date.test(date)) {
  errors[errors.length] = "invalid Date.";
 }
  
 if (!ck_event.test(event)) {
  errors[errors.length] = "Please enter The Event.";
 }
 if (!ck_cost.test(cost)) {
  errors[errors.length] = "Please enter The Cost.";
 }

 if (!ck_location.test(location)) {
  errors[errors.length] = "Incorrect Location.";
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
                <h3 class="text-center">Adding an New Event : </h3>  
			
	
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>Enter Date : </label>  
                          <input name="date" maxlength="10" />  
                           <?php echo $date_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter Event : </label>  
                          <input type="text" name="event" maxlength="50" />  
                          <?php echo $event_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Cost : $ </label>  
                          <input type="text" name="cost" maxlength="10" />  
                          <?php echo $cost_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Location : </label>  
                          <input type="text" name="location" maxlength="50" />  
                          <?php echo $location_error; ?>  
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