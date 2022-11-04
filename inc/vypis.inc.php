
<?php
$sp = mysqli_connect("localhost", "root", "", "udaje");

if ( isset($_GET['upravit']) ) {
      $dotaz = "SELECT * FROM udaje WHERE id_studenta='{$_GET['id_studenta']}'";
      $result = mysqli_query($sp, $dotaz);
      $row = mysqli_fetch_array($result);
    
      $jmeno=$row['jmeno'];
      $lokalita=$row['lokalita'];
      $skola=$row['skola'];
      $rok_ukonceni=$row['rok_ukonceni'];
      $programovaci_jazky=$row['programovaci_jazyky'];
      $preferovane_technologie=$row['preferovane_technologie'];
    }
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
      echo "Rok Ukončení: {$zaznam["rok_ukonceni"]}";
      echo '</p>';
      echo '<p class="panel-body">';
      echo "Jazyky: {$zaznam["programovaci_jazyky"]}";
      echo '</p>';
      echo '<p class="panel-body">';
      echo "Technologie: {$zaznam["preferovane_technologie"]}";
      echo '</p>';
      echo '</div></div>';


      }
      ?>
    </div>