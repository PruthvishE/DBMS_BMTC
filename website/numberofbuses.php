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
$query = "SELECT COUNT(no_of_buses) FROM public.route WHERE origin = '$_POST[from]' and destination ='$_POST[to]';";
//echo $query;
$result = pg_query($db,$query);
$row = pg_fetch_assoc($result);
//echo $row['cost'];
//print_r($row)
?>
 
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>number of buses</title>
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
<legend>number of buses in route</legend>


       <div class="form-group">
  <label class="col-md-4 control-label">FROM</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="from" placeholder="Enter source" class="form-control"  type="text">
    </div>
  </div>
</div>



     <div class="form-group">
  <label class="col-md-4 control-label">TO</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="to" placeholder="Enter destination" class="form-control"  type="text">
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
  <label class="col-md-4 control-label">number of buses</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="no_of_buses" placeholder="no_of_buses" class="form-control"  type="text" value="<?php echo (isset($row['count']))?$row['count']:''; ?>">
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




