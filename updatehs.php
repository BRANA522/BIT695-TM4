<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-updatehs.php';

	
 $score = '';
 $id = '';
 $first = '';
 $family = '';

 if(isset($_GET['id'])){
	 $sql = "select score, first, id, family from highscore
           where id=".$_GET['id'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		 $score = $row['score'];
		$id = $row['id'];
		$first = $row['first'];
		$family = $row['family'];
		
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_score = /^[0-9 ]{1,20}$/;
var ck_id = /^[0-9 ]{1,20}$/;
var ck_first = /^[A-Za-z0-9 ]{3,20}$/;
var ck_family = /^[A-Za-z0-9 ]{3,20}$/;


function validate(form){
 var score = form.score.value;
var id = form.id.value;
var first = form.first.value;
 var family = form.family.value;

  
 var errors = [];
 

 if (!ck_score.test(score)) {
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
    
  <div id="main" >  


<BR>
<h2>Editing The Selected High Score</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  
                        <div class="form-group">  
                          <label>Enter High Score : </label>  
                          <input value="<?=$score?>" name="score"/>  
                          <?php echo $score_error; ?>  
                     </div>  
                   
                     <div class="form-group">  
                          <label>Enter Member ID : </label>  
                          <input value="<?=$id?>" name="id" maxlength="35" />  
                           <?php echo $id_error; ?> 
                     </div>                           
                     <div class="form-group">  
                          <label>Enter First Name : </label>  
                          <input value="<?=$first?>" name="first" />  
                          <?php echo $first_error; ?>  
                     </div>  
					   <div class="form-group">  
                          <label>Enter Family Name : </label>  
                          <input value="<?=$family?>" name="family" />  
                          <?php echo $family_error; ?>  
                     </div>  
					
                     <div class="form-group">  
               
				     <input type="hidden"  value="<?=$id?>"/>
                           <input type="submit" name="btn_submit" value="Submit" />  
                     </div>  
                </form>  
                <div><?php echo $output; ?></div>  
           </div>  
           <br />  
      </body>  
 </html>  

