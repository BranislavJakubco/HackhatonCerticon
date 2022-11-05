
<?php

$sp = mysqli_connect("localhost","root","","udaje");
mysqli_query($sp, "SET NAMES'utf8';");


$dotaz="SELECT udaje.id_studenta, udaje.jmeno, udaje.email, udaje.rok_ukonceni, udaje.preferovane_technologie, jazyky.jazyk FROM (udaje LEFT JOIN udaje_o_jazycích on udaje.id_studenta=udaje_o_jazycích.id_studenta) left join jazyky on udaje_o_jazycích.id_jazyka=jazyky.id_jazyka";
$data= mysqli_query($sp,$dotaz);
echo mysqli_error($sp);

if ( isset($_GET['upravit']) ) {
    $dotaz = "SELECT udaje.id_studenta, udaje.jmeno, udaje.email, udaje.rok_ukonceni, udaje.preferovane_technologie, jazyky.jazyk FROM (udaje LEFT JOIN udaje_o_jazycích on udaje.id_studenta=udaje_o_jazycích.id_studenta) left join jazyky on udaje_o_jazycích.id_jazyka=jazyky.id_jazyka WHERE udaje.id_studenta='{$_GET['upravit']}';";
    $result = mysqli_query($sp, $dotaz);
    $row = mysqli_fetch_array($result);
  
    $id_studenta=$row['id_studenta'];
    $jmeno=$row['jmeno'];
    $rok_ukonceni=$row['rok_ukonceni'];
    $jazyk=$row['jazyk'];
    $preferovane_technologie=$row['preferovane_technologie'];
  }

if ( isset($_GET['update']) ) {
    $dotaz = "UPDATE udaje
             SET 
                     jmeno='{$_GET['jmeno']}',
                     rok_ukonceni='{$_GET['rok_ukonceni']}',
                     jazyk='{$_GET['jazyk']}',
                     preferovane_technologie='{$_GET['preferovane_technologie']}'
                     WHERE id_student='{$_GET['id_student']}'
                    ;";
    $radku_vlozeno = mysqli_query($sp, $dotaz);
  }

if (isset($_GET['upravit'])) {
    echo" <form action='' method='get'>
    <br><br><br>
    <input type='hidden' name='id_studenta' value='$id_studenta'>
      Jméno:
      <input type='text' name='jmeno' value='$jmeno'>
      Rok ukončení SŠ:
      <input type='number' name='rok_ukonceni' value='$rok_ukonceni'>
      Jazyk:
      <input type='text' name='jazyk' value='$jazyk'>
      Preferovane technologie:
      <input type='text' name='preferovane_technologie' value='$preferovane_technologie'>
      <input type='submit' name='update' value='Upravit záznam'>
      <br><br><br>
    </form>";
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class=" col-sm-4">';
    echo '<div class="panel panel-default";>';
    echo '<div class="panel-heading">';
    echo "ID: {$zaznam["id_studenta"]} 
    <form action='' method='get'>
    <input type='submit' name='upravit' value='U'>
    </form> ";
    echo '</div>';
    echo '<p class="panel-body">';
    echo "Jméno: {$zaznam["jmeno"]}";
    echo '<p class="panel-body">';
    echo "Rok Ukončení SŠ: {$zaznam["rok_ukonceni"]}";
    echo '</p>';
    echo '<p class="panel-body">';
    echo "Jazyky: {$zaznam["jazyk"]}";
    echo '</p>';
    echo '<p class="panel-body">';
    echo "Technologie: {$zaznam["preferovane_technologie"]}";
    echo '</p>';
    echo '</div></div>';

      ;
     } else {

while ($zaznam = mysqli_fetch_assoc($data)) {
      echo '<div class="container">';
      echo '<div class="row">';
      echo '<div class=" col-sm-4">';
      echo '<div class="panel panel-default";>';
      echo '<div class="panel-heading">';
      echo "ID: {$zaznam["id_studenta"]} 
      <form action='' method='get'>
      <input type='submit' name='upravit' value='U'>
      </form> ";
      echo '</div>';
      echo '<p class="panel-body">';
      echo "Jméno: {$zaznam["jmeno"]}";
      echo '<p class="panel-body">';
      echo "Rok Ukončení SŠ: {$zaznam["rok_ukonceni"]}";
      echo '</p>';
      echo '<p class="panel-body">';
      echo "Jazyky: {$zaznam["jazyk"]}";
      echo '</p>';
      echo '<p class="panel-body">';
      echo "Technologie: {$zaznam["preferovane_technologie"]}";
      echo '</p>';
      echo '</div></div>';


      }}
      ?>
    </div>