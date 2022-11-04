<?php
session_start();
if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
  $jmeno = $_POST['jmeno'];
  $heslo = $_POST['heslo'];
 if ($jmeno == "admin" && $heslo == "admin") {
  $_SESSION['login'] = 1;  
  }

#$sp = mysqli_connect("localhost","root","","jmeno-databaze");
#mysqli_query($sp, "SET NAMES'utf8';");


#$dotaz="SELECT * from jmeno-tabulky";
#$data= mysqli_query($sp,$dotaz);
#echo mysqli_error($sp);
#mysqli_close($sp);


  
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>MakejvIT</title>
</head>
<body>
    
<div class="bodya">
    <div class="row">
        <div class="col-sm-12">
                <?php
                include("./inc/rozcestnik.inc.php");
                ?>
        </div></div>
        <div class="row">
           
                <?php
                include("./PHP/inc.sec.php");
                ?>
         
        </div>
    </div></div>

</body>
</html>