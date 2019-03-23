<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Employee insertion</title>
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
<legend>Employee details</legend>


     <div class="form-group">
  <label class="col-md-4 control-label">ESN</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="esn" placeholder="Enter the ESN" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label">First name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="fname" placeholder="Enter the fname" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">MINIT</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="minit" placeholder="Enter the minit" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">last name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="lname" placeholder="Enter the lname" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">DOB</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="dob"  class="form-control"  type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">street_no</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="streetno" placeholder="Enter the street_no" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">pincode</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="pincode" placeholder="Enter the pincode" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">city</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="city" placeholder="Enter the city" class="form-control"  type="text">
    </div>
  </div>
</div>

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
                        <label class="col-md-4 control-label">SEX</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="SEX" value="M" /> M
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="SEX" value="F" /> F
                                </label>
                            </div>
                        </div>
                    </div>


<div class="form-group">
  <label class="col-md-4 control-label">role</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="role" placeholder="Enter role" class="form-control"  type="text">
    </div>
  </div>
</div>




<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Depot ID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="did" placeholder="Enter the DID" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">state id</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="state" placeholder="Enter the state" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">RTO_NUMBER</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input  name="rto_no" placeholder="Enter RTO_NUMBER" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">state id</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
  <input name="state" placeholder="Enter the state" class="form-control"  type="text">
    </div>
  </div>
</div>

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
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
