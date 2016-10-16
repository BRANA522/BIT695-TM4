<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-updateaddbg.php';

	
 $id = '';
 $first = '';
 $family = '';
 $bg = '';
 $bg2 = '';
 $bg3 = '';

 if(isset($_GET['id'])){
	 $sql = "select id, first, family, bg, bg2, bg3 from afplayers
           where id=".$_GET['id'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		 $id = $row['id'];
		$first = $row['first'];
		$family = $row['family'];
		$bg = $row['bg'];
		$bg2 = $row['bg2'];
		$bg3 = $row['bg3'];
		
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
var ck_memberid = /^[0-9 ]{1,20}$/;
var ck_firstname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_familyname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_bg = /^[A-Za-z0-9 ]{3,20}$/;
var ck_bg2 = /^[A-Za-z0-9 ]{3,20}$/;
var ck_bg3 = /^[A-Za-z0-9 ]{3,20}$/;


function validate(form){
var id = form.id.value;
var first = form.first.value;
 var family = form.family.value;
 var bg = form.bg.value;
 var bg2 = form.bg2.value;
 var bg3 = form.bg3.value;

  
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


 if (!ck_bg.test(bg)) {
  errors[errors.length] = "Please enter Board Game";
 }
  if (!ck_bg2.test(bg2)) {
  errors[errors.length] = "Please enter Second Board Game ";
 }

 if (!ck_bg3.test(bg3)) {
  errors[errors.length] = "Please enter Third Board Game";
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
<h2> Add an Board Game for the Selected Member</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  

                     <div class="form-group">  
                          <label>The Member's details : </label>  
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
					 
					 
					   <div class="form-group">        <label>------------------- </label>    </div>  
					 
					 					   <div class="form-group">  
					   
                          <label>Please Enter The Members Top 3 Board Games : </label>  
                          <input type="text" value="<?=$bg?>" name="bg" maxlength="50" />  
                          <?php echo $bg_error; ?>  
                     </div>  
								   <div class="form-group">  
					   
                            
                          <input type="text" value="<?=$bg2?>" name="bg2" maxlength="50" />  
                          <?php echo $bg2_error; ?>  
                     </div>  			   <div class="form-group">  
					     
                          <input type="text" value="<?=$bg3?>" name="bg3" maxlength="50" />  
                          <?php echo $bg3_error; ?>  
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

