<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-updateschedule.php';

$daynum = ''; 
 $day = '';
 $time = '';
 $venue = '';
 
 if(isset($_GET['daynum'])){
	 $sql = "select day, time, daynum, venue from schedule
           where daynum=".$_GET['daynum'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		  $daynum = $row['daynum'];
		 $day = $row['day'];
		$time = $row['time'];
		$venue = $row['venue'];
		
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
 var ck_daynum = /^[A-Za-z0-9 ]{1,20}$/;
 var ck_day = /^[A-Za-z0-9 ]{1,20}$/;
var ck_time = /^[A-Za-z0-9 ]{1,20}$/;
var ck_venue = /^[A-Za-z0-9 ]{3,20}$/;



function validate(form){
var daynum = form.daynum.value;
var day = form.day.value;
var time = form.time.value;
 var venue = form.venue.value;
  
 var errors = [];
 
  if (!ck_daynum.test(daynum)) {
  errors[errors.length] = "Invalid Day.";
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
    
  <div id="main" >  


<BR>
<h2>Editing The Selected Schedule</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  

				
				<div class="form-group">  
                          <label>Enter Number of Day : </label>  
                          <input name="daynum" value="<?=$daynum?>" maxlength="25" />  
                           <?php echo $daynum_error; ?> 
                     </div>  
				
				
                     <div class="form-group">  
                          <label>Enter Day : </label>  
                          <input name="day" value="<?=$day?>" maxlength="35" />  
                           <?php echo $day_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter Time : </label>  
                          <input type="text" value="<?=$time?>" name="time" maxlength="25" />  
                          <?php echo $time_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Venue : </label>  
                          <input type="text" value="<?=$venue?>" name="venue" maxlength="35" />  
                          <?php echo $venue_error; ?>  
                     </div>  
                     <div class="form-group">  
               
				     <input type="hidden" name="txt" value="<?=$daynum?>"/>
                           <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  

