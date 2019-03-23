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
$query = "SELECT ph_no FROM public.employee WHERE role = 'manager' and d_id = (SELECT d_id FROM depot WHERE location ='$_POST[location]');";
//echo $query;
$result = pg_query($db,$query);
$row = pg_fetch_assoc($result);
//echo $row['cost'];
?>
 
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Manager PH NO</title>
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
<legend>manager ph_no</legend>


       <div class="form-group">
  <label class="col-md-4 control-label">location</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="location" placeholder="Enter the location" class="form-control"  type="text">
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
  <label class="col-md-4 control-label">phone number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
  <input name="ph_no" placeholder="ph_no" class="form-control"  type="text" value="<?php echo (isset($row['ph_no']))?$row['ph_no']:''; ?>">
    </div>
  </div>
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




