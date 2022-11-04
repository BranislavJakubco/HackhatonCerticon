<?php

while ($zaznam = mysqli_fetch_assoc($data)) {
      echo '<div class="panel panel-default">';
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