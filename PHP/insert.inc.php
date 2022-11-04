<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    
<?php
if (isset($_POST['GDPR'])) {

$conn = mysqli_connect("localhost", "root", "", "udaje");
$jmeno = $_REQUEST['name'];
$lokalita = $_REQUEST['lokalita'];
$skola = $_REQUEST['school'];
$rok_ukonceni = $_REQUEST['yearEND'];
$programovaci_jazyky = $_REQUEST['jazyk'];
$preferovane_technologie = $_REQUEST['prefTechnology'];
if (isset($_POST['java'])) {

    $java = $_REQUEST['jazyk'];
}
if (isset($_POST['python'])) {

    $python = $_REQUEST['jazyk'];
}if (isset($_POST['c#'])) {

    $cSharp = $_REQUEST['jazyk'];
}if (isset($_POST['c++'])) {

    $cPlus = $_REQUEST['jazyk'];
}

$sql = "INSERT INTO udaje  VALUES ('$jmeno',
'$lokalita','$skola','$rok_ukonceni','$preferovane_technologie')";
mysqli_close($conn);
}



?>

</body>

</html>



