<?php
$db = pg_connect("host=localhost dbname=bmtc user=postgres password=root");
//if($db)
//{
  // echo " connected";
 //}
 //else
 //{
   //echo " no";
 //}
$query = "SELECT * FROM public.smart_card WHERE balance<$_POST[low]";
//echo $query;
$result = pg_query($db,$query);
$row = pg_fetch_assoc($result);
//echo $row['cost'];
?>
 
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>low balance</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Get low balance users</legend>


       <div class="form-group">
  <label class="col-md-4 control-label">enter low balance value</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="low" placeholder="Enter the low balance" class="form-control"  type="text">
    </div>
  </div>
</div>



     
<!-- Text input-->






<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning">compute<span class="glyphicon glyphicon-plus"></span></button>
  </div>
</div>

     <div class="form-group">
      <?php
  echo "<table>";
  echo "<tr><th>serial_no</th><th>owner_id</th><th>scheme</th><th>balance</th><th>date_of_issue</th><th>validity</th></tr>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'> " . $row['serial_no'] . " </td>";
echo "<td align='center' width='200'> " . $row['owner_id'] . " </td>";
echo "<td align='center' width='200'> " . $row['scheme'] . " </td>";
echo "<td align='center' width='200'> " . $row['balance'] . " </td>";
echo "<td align='center' width='200'> " . $row['date_of_issue'] . " </td>";
echo "<td align='center' width='200'> " . $row['validity'] . " </td>";

echo "</tr>";}echo "</table>";?>
</div>


</fieldset>
</form>
<!-- <?php
if($result){
	echo "<h1 style=\"text-align: center;\">cost:- "+$row['cost']+"</h1>";
  echo "SUCCESSFUL";
} 
else
{
  echo "ERRORS";
}
?>
 -->
</div>
    </div><!-- /.container -->
<!-- <?php
if($result){
//	echo "<h1 style=\"text-align: center;\">cost:- "+$row['cost']+"</h1>";
  echo "SUCCESSFUL";
} 
else
{
  echo "ERRORS";
}
?>
 -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>




