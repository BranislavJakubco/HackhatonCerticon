<?php

$sp = mysqli_connect("localhost", "root", "", "udaje");
mysqli_query($sp, "SET NAMES 'utf8';");
$data = mysqli_query($sp, $dotaz);
$dotaz = "SELECT * FROM `udaje`"; 
while ($zaznam = mysqli_fetch_assoc($data)) {
      echo '<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">';
      echo '<div class="card-header">{$zaznam["id_studenta"]}</div>';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">{$zaznam["jmeno"]}</h5>';
      echo '<p class="card-text">{$zaznam["rok_ukonceni"]}</p>';
      echo '<p class="card-text">{$zaznam["programovaci_jazky"]}</p>';
      echo '<p class="card-text">{$zaznam["preferovane_technologie"]}</p>';
      echo '</div></div>';


      }
      ?>