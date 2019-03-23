<!--  -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    margin: 30px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(100, 100, 40, 0.2);
  padding: 16px;
  margin: 20px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<!-- <form><button style="align-content: right;"><a href="logout.php">logout</a></button></form> -->
<h2>Welcome</h2>
<br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <a href="./totalexpenditure.php"><h3>Total expenditure</h3>
      <p>incurred on btmc</p>
      <!-- <p>source to destination</p> -->
    </div>
  </div></a>

<div class="column"></div>
  <div class="column">
    <div class="card">
      <a href="./lowsmartbalance.php"><h3>Get users with low balance in smartcards</h3>
      <!-- <p>buy smart card</p> -->
      <!-- <p>recharge your smartcard</p> -->
    </div>
  </div></a>
  

  <div class="column">
    <div class="card">
      <a href="./maxexpen.php"><h3>Highest expenditure route</h3>
      <!-- <p>check your balance here</p>
       <p></p> -->
    </div>
  </div></a>

<div class="column">
    <div class="card">
      <a href="./minexpen.php"><h3>least expenditure route</h3>
      <!-- <p>check your balance here</p>
       <p></p> -->
    </div>
  </div></a>
</div>
<div class="row">
<div class="column">
    <div class="card">
      <a href="./avgbuses.php"><h3>average number of buses in depot</h3>
      <!-- <p>check your balance here</p>
       <p></p> -->
    </div>
  </div></a>




<div class="column">
    <div class="card">
      <a href="./managerphno.php"><h3>get manager phone number</h3>
      <p>of a particular depot</p>
      <!-- <p>or recharge your smartcard</p> -->
    </div>
  </div></a>


<div class="column">
    <div class="card">
      <a href="./Numberofbuses.php"><h3>Number of buses </h3>
      <p>from one route to another</p>
      <!-- <p>or recharge your smartcard</p> -->
    </div>
  </div></a>

<div class="column">
    <div class="card">
      <a href="./depot.php"><h3>INSERT INTO DEPOT </h3>
      <p></p>
      <!-- <p>or recharge your smartcard</p> -->
    </div>
  </div></a>

</body>
</html>
