<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>

    <?php

if (isset($_POST['GDPR'])) {

$conn = mysqli_connect("localhost", "root", "", "udaje");
mysqli_query($conn, "SET NAMES'utf8';");
$id = $_REQUEST['id'];
$jmeno = $_REQUEST['name'];
$email = $_REQUEST['email'];
$lokalita = $_REQUEST['lokalita'];
$skola = $_REQUEST['school'];
$rok_ukonceni = $_REQUEST['yearEND'];
$jazyk = $_REQUEST['jazyk'];
$preferovane_technologie = $_REQUEST['prefTechnology'];

$dotaz4 = "INSERT INTO jazyky (jazyk) values('$jazyk')";
    $data4=mysqli_query($conn,$dotaz4);
    echo mysqli_error($conn);

    $dotaz5 = "INSERT INTO udaje VALUES ('$id','$jmeno',
    '$email',
    '$lokalita','$skola','$rok_ukonceni','$preferovane_technologie')";
   $data5=mysqli_query($conn,$dotaz5);
    echo mysqli_error($conn);

if (isset($_POST['Java'])) {
    
    $jazyk = $_POST['Java'];
    $dotaz2="SELECT id_jazyka from jazyky where jazyk = 'Java'";
    $sql = "SELECT id_studenta from udaje where email = '$email'";
    echo $sql;
    $jazyk_data=mysqli_query($conn,$dotaz2);
    $student_data=mysqli_query($conn,$sql);
    $jazyk_id=0;
    $student_id=0;
    if ($jazyk_data) {
         $row = mysqli_fetch_row($jazyk_data) ;
          $jazyk_id=$row[0];
          #echo $row[0];
     }
     if ($student_data) {
        $row = mysqli_fetch_row($student_data) ;
          $student_id=$row[0];
       echo $row[0];
    } 
    #echo $student_id;
    
    $dotaz="INSERT INTO udaje_o_jazycích values ('$jazyk_id','$student_id')";
    
   echo "<p>$dotaz</p>";

   # $data=mysqli_query($conn,$dotaz2);
    #$data2=mysqli_query($conn,$sql);
    
    #mysqli_begin_transaction($conn);
  #  echo mysqli_error($conn);
    #$data3=mysqli_query($conn,$dotaz);
   # echo mysqli_error($conn);
    #mysqli_commit($conn);
  #  echo mysqli_error($conn);
    if (mysqli_query($conn,$dotaz) === TRUE) {
  
        echo "<p>New record created successfully</p>";
} else {
  echo "<p>Error: " . $dotaz . "<br>" . $conn->error."</p>";
}
}
if (isset($_POST['Python'])) {

    $jazyk = $_REQUEST['Python'];
    $dotaz2="SELECT id_jazyka from jazyky where jazyk = 'Python'";
    $sql = "SELECT id_studenta from udaje where email = '$email'";
    echo $sql;
    $jazyk_data=mysqli_query($conn,$dotaz2);
    $student_data=mysqli_query($conn,$sql);
    $jazyk_id=0;
    $student_id=0;
    if ($jazyk_data) {
         $row = mysqli_fetch_row($jazyk_data) ;
          $jazyk_id=$row[0];
          #echo $row[0];
     }
     if ($student_data) {
        $row = mysqli_fetch_row($student_data) ;
          $student_id=$row[0];
       echo $row[0];
    } 
    #echo $student_id;
    
    $dotaz="INSERT INTO udaje_o_jazycích values ('$jazyk_id','$student_id')";
    
   echo "<p>$dotaz</p>";

   # $data=mysqli_query($conn,$dotaz2);
    #$data2=mysqli_query($conn,$sql);
    
    #mysqli_begin_transaction($conn);
  #  echo mysqli_error($conn);
    #$data3=mysqli_query($conn,$dotaz);
   # echo mysqli_error($conn);
    #mysqli_commit($conn);
  #  echo mysqli_error($conn);
    if (mysqli_query($conn,$dotaz) === TRUE) {
  
        echo "<p>New record created successfully</p>";
} else {
  echo "<p>Error: " . $dotaz . "<br>" . $conn->error."</p>";
}
}if (isset($_POST['CSharp'])) {

    $jazyk = $_REQUEST['CSharp'];
    $dotaz2="SELECT id_jazyka from jazyky where jazyk = 'CSharp'";
    $sql = "SELECT id_studenta from udaje where email = '$email'";
    echo $sql;
    $jazyk_data=mysqli_query($conn,$dotaz2);
    $student_data=mysqli_query($conn,$sql);
    $jazyk_id=0;
    $student_id=0;
    if ($jazyk_data) {
         $row = mysqli_fetch_row($jazyk_data) ;
          $jazyk_id=$row[0];
          #echo $row[0];
     }
     if ($student_data) {
        $row = mysqli_fetch_row($student_data) ;
          $student_id=$row[0];
       echo $row[0];
    } 
    #echo $student_id;
    
    $dotaz="INSERT INTO udaje_o_jazycích values ('$jazyk_id','$student_id')";
    
   echo "<p>$dotaz</p>";

   # $data=mysqli_query($conn,$dotaz2);
    #$data2=mysqli_query($conn,$sql);
    
    #mysqli_begin_transaction($conn);
  #  echo mysqli_error($conn);
    #$data3=mysqli_query($conn,$dotaz);
   # echo mysqli_error($conn);
    #mysqli_commit($conn);
  #  echo mysqli_error($conn);
    if (mysqli_query($conn,$dotaz) === TRUE) {
  
        echo "<p>New record created successfully</p>";
} else {
  echo "<p>Error: " . $dotaz . "<br>" . $conn->error."</p>";
}
}
if (isset($_POST['CPlus'])) {

    $jazyk = $_REQUEST['CPlus'];
    $dotaz2="SELECT id_jazyka from jazyky where jazyk = 'CPlus'";
    $sql = "SELECT id_studenta from udaje where email = '$email'";
    echo $sql;
    $jazyk_data=mysqli_query($conn,$dotaz2);
    echo mysqli_error($sp);
    $student_data=mysqli_query($conn,$sql);
    echo mysqli_error($sp);
    $jazyk_id=0;
    $student_id=0;
    if ($jazyk_data) {
         $row = mysqli_fetch_row($jazyk_data) ;
          $jazyk_id=$row[0];
          echo mysqli_error($sp);
          #echo $row[0];
     }
     if ($student_data) {
        $row = mysqli_fetch_row($student_data) ;
          $student_id=$row[0];
          echo mysqli_error($sp);
       echo $row[0];
    } 
    #echo $student_id;
    
    $dotaz="INSERT INTO udaje_o_jazycích values ('$jazyk_id','$student_id')";
    $data=mysqli_query($conn,$dotaz);
    echo mysqli_error($sp);
   echo "<p>$dotaz</p>";

   # $data=mysqli_query($conn,$dotaz2);
    #$data2=mysqli_query($conn,$sql);
    
    #mysqli_begin_transaction($conn);
  #  echo mysqli_error($conn);
    #$data3=mysqli_query($conn,$dotaz);
   # echo mysqli_error($conn);
    #mysqli_commit($conn);
  #  echo mysqli_error($conn);
    if (mysqli_query($conn,$dotaz) === TRUE) {
  
        echo "<p>New record created successfully</p>";
} else {
  echo "<p>Error: " . $dotaz . "<br>" . $conn->error."</p>";
}
}



mysqli_close($conn);
}



?>

</body>

</html>
