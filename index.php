  
<?php 
include 'connect.php';
?>
<!DOCTYPE html>  
<html>

<body>
<head>
    <link rel="stylesheet" href="style1.css">

    <title>Board games aficionados</title>
</head>


<BR></br>

<!-- first table--><br></br>
<H2>Aficionados Board Game Club Members List</h2>
<H3><a href="Create.php">Click here to Add an New Member</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr>

<th>ID</th>
<th>First Name</th>
<th>Family Name</tH>
<th>Email</th>
<th>Phone</th>
<th>Action</th>


</tr>
<?php 
$sql = "select id, first, family, email, phone from afplayers";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 

<td><?=$row['id']?></td>
<td><?=$row['first']?></td>
<td><?=$row['family']?></td>
<td><?=$row['email']?></td>
<td><?=$row['phone']?></td>
<Td> 
<a href="update.php?id=<?=$row['id']?>">Edit</a>
<a href="delete.php?id=<?=$row['id']?>">Delete</a>

<?php
  }
  }
?>

</table>
<!-- end of table------------------------------------------------------------------------------------->

<!-- start of table------------------------------------------------------------------------------------->


<br></br>
<H2>Aficionados Members who play which board game</h2>
<H3>Please Select the member under actions who you wish to add a Board Game to :</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr>

<th>ID</th>
<th>First Name</th>
<th>Family Name</tH>
<th>TOP 3 Board Games</th>


<th>Action</th>


</tr>
<?php 
$sql = "select id, first, family, bg, bg2, bg3 from afplayers";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 

<td><?=$row['id']?></td>
<td><?=$row['first']?></td>
<td><?=$row['family']?></td>
<td><?=$row['bg']?> &nbsp | &nbsp <?=$row['bg2']?> &nbsp | &nbsp <?=$row['bg3']?></td>

<Td> 
<a href="Createaddbg.php?id=<?=$row['id']?>">|-- Add BoardGame --|    </a>
<a href="update-addbg.php?id=<?=$row['id']?>">Edit</a>
<a href="delete.php?id=<?=$row['id']?>">Delete</a>
<?php
  }
  }
?>

</table>




<!-- end of table------------------------------------------------------------------------------------->






<!-- start of table------------------------------------------------------------------------------------->


<br></br>
<H2>Aficionados Championship and Competition This Year</h2>
<H3><a href="Createevent.php">Click here to Add an New Championship or Competition</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr>

<th>Date (DayMonthYear)</th>
<th>Event</th>
<th>Cost ($)</tH>
<th>Location</th>


<th>Action</th>


</tr>
<?php 
$sql = "select date, event, cost, location from events";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 

<td><?=$row['date']?></td>
<td><?=$row['event']?></td>
<td><?=$row['cost']?></td>
<td><?=$row['location']?></td>

<Td> 

<a href="updateevent.php?date=<?=$row['date']?>">Edit</a>
<a href="deleteevent.php?date=<?=$row['date']?>">Delete</a>
<?php
  }
  }
?>

</table>





<!-- second table board  game available -------------------------------------------------------------------->
<br></br>
<H2>Aficionados Board Games available List</h2>
<H3><a href="Createbg.php">Click here to Add an New Board game</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr><th>Board Game ID No.</th>
<th>No. Players (Recommended)</th>
<th>Board Game</th>
<th>Action</th>


</tr>
<?php 
$sql = "select id, numb, bg from boardgame";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 
<td><?=$row['id']?></td>
<td><?=$row['numb']?></td>
<td><?=$row['bg']?></td>
<Td> 
<a href="updatebg.php?id=<?=$row['id']?>">Edit</a>
<a href="deletebg.php?id=<?=$row['id']?>">Delete</a>

<?php
  }
  }
?>

</table>

<!-- end of second table-------------------------------------------------------------------------------->


<!-- third table---------------------------------------------------------------------------------------->
<br></br>
<H2>The Board Game Club Schedule</h2>
<H3><a href="Createschedule.php">Click here to change the date or venue</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr>
<th>No. </th>
<th>Day</th>
<th>Time</th>
<th>Venue</tH>

<th>Action</th>


</tr>
<?php 
$sql = "select daynum, day, time, venue from schedule";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 

<td><?=$row['daynum']?></td>
<td><?=$row['day']?></td>
<td><?=$row['time']?></td>
<td><?=$row['venue']?></td>

<Td> 
<a href="updateschedule.php?daynum=<?=$row['daynum']?>">Edit</a>
<a href="deleteschedule.php?daynum=<?=$row['daynum']?>">Delete</a>

<?php
  }
  }
?>

</table>


<!-- end of third table-------------------------------------------------------------------------------->


<!-- fourth table-------------------------------------------------------------------------------------->
<br></br>
<H2>The Club's high score </h2>
<H3><a href="Createhs.php">Click here to Add or change a high score</a></H3>
<table border="10" cellspacing="0" cellpadding="5px" >
<tr>

<th>Score</th>
<th>First Name</th>
<th>Family Name</tH>
<th>ID</th>

<th>Action</th>


</tr>
<?php 
$sql = "select score, first, family, id from highscore";
$result = mysqli_query($con, $sql);
  if(mysqli_num_rows($result) > 0){ 
  while($row = mysqli_fetch_assoc($result)){
?>
<tr> 

<td><?=$row['score']?></td>
<td><?=$row['first']?></td>
<td><?=$row['family']?></td>
<td><?=$row['id']?></td>

<Td> 
<a href="updatehs.php?id=<?=$row['id']?>">Edit</a>
<a href="deletehs.php?id=<?=$row['id']?>">Delete</a>

<?php
  }
  }
?>

</table>

<!-- end of fourth table-->


</body>
</html>