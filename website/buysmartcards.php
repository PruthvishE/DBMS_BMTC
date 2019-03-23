<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Smartcard insertion</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">

    <form class="well form-horizontal" action="acept.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Smart Card details</legend>

<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label">Owner ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="owner_id" placeholder="Enter the Owner ID" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Scheme</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="scheme" class="form-control selectpicker" >
      <option value="" >Please select the appropriate scheme</option>
      <option value="Weekly">Weekly</option>
      <option value="Monthly">Monthly</option>
      <option value="Yearly">Yearly</option>

    </select>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Balance</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input name="balance" placeholder="Enter the balance amount " class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Passenger ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="passenger_id" placeholder="Enter the Passenger ID" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Insert <span class="glyphicon glyphicon-plus"></span></button>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">transaction status</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="state" placeholder="no transactions" class="form-control"  type="text" value="<?php echo (isset($result))?Successful:'no transactions yet';?>">
    </div>
  </div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>