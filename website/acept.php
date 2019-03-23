
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Page Title</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <?php
            //$db = pg_connect("host=localhost dbname=bmtc user=postgres password=root");
            //$serial = $_POST["serial"];
            $oid=$_POST["owner_id"];
            $scheme=$_POST["scheme"];
            $balance=$_POST["balance"];
            $passenger_id=$_POST["passenger_id"];
            $db = pg_connect("host=localhost dbname=bmtc user=postgres password=root");
            $query = "INSERT INTO SMART_CARD VALUES('$oid','$oid',NOW()+INTERVAL '1 YEAR',NOW(),'$scheme',$balance,'30')";
            //echo $query;
            $result = pg_query($db,$query);
            // if($result)
            // {
            //     echo "yesakaadumi";
            // }
            // else
            // {
            //     echo "sad life";
            // }
        ?>
 </head>
 <body>
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <div class="jumbotron" style="background:##f3ff0f;"><h3>Thank You!</h3><br><br> Thank you for Buying Our Smart card!</div>
 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
 </body>
 </html>