<!DOCTYPE html>  



<?php 
include 'connect.php';
include 'val-for-updatebg.php';


 $id = '';
 $numb = '';	
 $bg = '';
 
 if(isset($_GET['id'])){
	 $sql = "select id, numb, bg from boardgame
           where id=".$_GET['id'];        	 
	 $result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{ 
	$row = mysqli_fetch_assoc($result);
		  $numb = $row['numb'];
		 $bg = $row['bg'];
		$id = $row['id'];
		}
 }
		?>

		
	
 <html>  
      <head>  
    <link rel="stylesheet" href="style1.css">
    <title>Board games aficionados</title>

	  
 <script type="text/javascript">
  var ck_numb = /^[A-Za-z0-9 ]{3,20}$/;
var ck_id = /^[A-Za-z0-9 ]{3,20}$/;

 var ck_bg = /^[A-Za-z0-9 ]{3,20}$/;

function validate(form){
var numb = form.numb.value;
var bg = form.bg.value;
var id = form.id.value;

  
 var errors = [];
 
  if (!ck_numb.test(numb)) {
  errors[errors.length] = "Invalid Board Game.";
 }
  
 
 if (!ck_bg.test(bg)) {
  errors[errors.length] = "Invalid Board Game.";
 }
   if (!ck_id.test(id)) {
  errors[errors.length] = "Invalid Board Game.";
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
<h2>Editing The Board Game</h2>

				
                <form method="post"  name="form" onsubmit="validate(this)">  
 <div class="form-group">  
                          <label>Enter Board Game ID Number : </label>  
                          <input name="id" value="<?=$id?>" maxlength="35" />  
                          <?php echo $id_error; ?>  
                     </div>  
				
				
				   <div class="form-group">  
                          <label>Enter number : </label>  
                          <input name="numb" value="<?=$numb?>" maxlength="35" />  
                          <?php echo $numb_error; ?>  
                     </div>  
				
				
                     <div class="form-group">  
                          <label>Enter Board Game : </label>  
                          <input name="bg" value="<?=$bg?>" maxlength="50" />  
                           <?php echo $bg_error; ?> 
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

