<?php
session_start();
if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
  $jmeno = $_POST['jmeno'];
  $heslo = $_POST['heslo'];
 if ($jmeno == "admin" && $heslo == "admin") {
  $_SESSION['login'] = 1;  
  }
}
$sp = mysqli_connect("localhost","root","","udaje");
mysqli_query($sp, "SET NAMES'utf8';");


$dotaz="SELECT udaje.id_studenta, udaje.jmeno, udaje.email, udaje.rok_ukonceni, udaje.preferovane_technologie, jazyky.jazyk from udaje inner join udaje_o_jazycích on udaje.id_studenta=udaje_o_jazycích.id_studenta left join jazyky on udaje_o_jazycích.id_jazyka=jazyky.id_jazyka ";
$data= mysqli_query($sp,$dotaz);
echo mysqli_error($sp);
mysqli_close($sp);

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/CSS.css">

  <title>MakejvIT</title>
</head>
<body>

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
        <?php
               // include("./inc/footer.inc.php");
                ?>
    </div>

</body>
</html>