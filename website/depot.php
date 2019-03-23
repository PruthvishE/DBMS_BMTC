<?php
$db = pg_connect("host=localhost dbname=bmtc user=postgres password=root");
// if($db)
// {
//   echo " connectedyes";
// }
// else
// {
//   echo " no";
// }
// echo "'$_POST[d_id]','$_POST[location]','$_POST[ph_no]',$_POST[no_buses],$_POST[no_of_platforms],'$_POST[opening_time]','$_POST[closing_time]','$_POST[MSN]'";
$query = "INSERT INTO depot VALUES('$_POST[d_id]','$_POST[location]','$_POST[ph_no]',$_POST[no_buses],$_POST[no_of_platforms],'$_POST[opening_time]','$_POST[closing_time]','$_POST[MSN]')";
// $query1 = "INSERT INTO depot VALUES('6','YELAHANKAsssss','8826464257',3,1,'05:00:00','17:00:00','E041')";
$result = pg_query($db,$query);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Depot insertion</title>
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
<legend>Depot details</legend>


       <div class="form-group">
  <label class="col-md-4 control-label">Depot ID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="d_id" placeholder="Enter the DID" class="form-control"  type="text">
    </div>
  </div>
</div>



     <div class="form-group">
  <label class="col-md-4 control-label">location</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="location" placeholder="Enter location" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->





<div class="form-group">
  <label class="col-md-4 control-label">phone number</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
  <input  name="ph_no" placeholder="Enter the phone_number" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">number of buses</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="no_buses" placeholder="Enter no_of_buses" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">number of platforms</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="no_of_platforms" placeholder="Enter no_of_platforms" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">opening time</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input  name="opening_time" placeholder="Enter opening time" class="form-control"  type="time" step="1">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">closing time</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input  name="closing_time" placeholder="Enter closing time" class="form-control"  type="time" step="1">
    </div>
  </div>
</div>

<!-- Text input-->


<!-- Text input-->
      

<div class="form-group">
  <label class="col-md-4 control-label">manager ssn</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="MSN" placeholder="Enter MSN" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Insert <span class="glyphicon glyphicon-plus"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
<?php
if($result){
  echo "SUCCESSFUL";
} 
else
{
  echo "ERRORS";
}
?>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
