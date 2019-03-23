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
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(100, 100, 40, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Welcome</h2>
<br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <a href="./ratesticket.php"><h3>Get rates of ticket</h3>
      <p>prices of tickets from</p>
      <p>source to destination</p>
    </div>
  </div></a>

  <div class="column">
    <div class="card">
      <a href="./buysmartcards.php"><h3>Buy smart cards</h3>
      <p>buy smart card</p>
      <!-- <p>recharge your smartcard</p> -->
    </div>
  </div></a>
  

  <div class="column">
    <div class="card">
      <a href="./checksmartbalance.php"><h3>smart card balance</h3>
      <p>check your balance here</p>
      <p></p>
    </div>
  </div></a>

<div class="column">
    <div class="card">
      <a href="./numberofbuses.php"><h3>Number of buses </h3>
      <p>from one route to another</p>
      <!-- <p>or recharge your smartcard</p> -->
    </div>
  </div></a>

</body>
</html>
