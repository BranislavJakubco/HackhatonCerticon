
<?php

$sp = mysqli_connect("localhost","root","","udaje");
mysqli_query($sp, "SET NAMES'utf8';");


$dotaz="SELECT udaje.id_studenta, udaje.jmeno, udaje.email, udaje.rok_ukonceni, udaje.preferovane_technologie, jazyky.jazyk FROM (udaje LEFT JOIN udaje_o_jazycích on udaje.id_studenta=udaje_o_jazycích.id_studenta) left join jazyky on udaje_o_jazycích.id_jazyka=jazyky.id_jazyka";
$data= mysqli_query($sp,$dotaz);
echo mysqli_error($sp);
mysqli_close($sp);

while ($zaznam = mysqli_fetch_assoc($data)) {
      echo '<div class="container">';
      echo '<div class="row">';
      echo '<div class=" col-sm-4">';
      echo '<div class="panel panel-default";>';
      echo '<div class="panel-heading">';
      echo "ID: {$zaznam["id_studenta"]}";
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


      }
      ?>
    </div>