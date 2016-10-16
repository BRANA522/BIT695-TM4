<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-updateevent.php';

	
 $date = '';
 $event = '';
 $cost = '';
 $location = '';
 
 if(isset($_GET['date'])){
	 $sql = "select date, event, cost, location from events
           where date=".$_GET['date'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		 $date = $row['date'];
		$event = $row['event'];
		$cost = $row['cost'];
		$location = $row['location'];
		
		
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_date = /^[0-9 ]{1,20}$/;
var ck_event = /^[A-Za-z0-9 ]{3,20}$/;
var ck_cost = /^[0-9 ]{1,20}$/;
var ck_location = /^[A-Za-z0-9 ]{3,20}$/;


function validate(form){
var date = form.date.value;
var event = form.event.value;
 var cost = form.cost.value;
 var location = form.location.value;
 

  
 var errors = [];
 
 if (!ck_date.test(date)) {
  errors[errors.length] = "Invalid Date.";
 }
  
 if (!ck_event.test(event)) {
  errors[errors.length] = "Please enter Event.";
 }
 if (!ck_cost.test(cost)) {
  errors[errors.length] = "Please enter the Cost.";
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
    
  <div id="main" >  


<BR>
<h2>Editing The Selected Event</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>Enter Date : </label>  
                          <input name="date" value="<?=$date?>" maxlength="10" />  
                           <?php echo $date_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter Event : </label>  
                          <input type="text" value="<?=$event?>" name="event" maxlength="50" />  
                          <?php echo $event_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Cost : </label>  
                          <input value="<?=$cost?>" name="cost" maxlength="10" />  
                          <?php echo $cost_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Location: </label>  
                          <input type="text" value="<?=$location?>" name="location" maxlength="50" />  
                          <?php echo $location_error; ?>  
                     </div>  
                  
                     <div class="form-group">  
               
				     <input type="hidden" name="txt_date" value="<?=$date?>"/>
                           <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  

