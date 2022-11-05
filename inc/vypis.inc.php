<div class="container">
<?php

$sp = mysqli_connect("localhost","root","","udaje");
mysqli_query($sp, "SET NAMES'utf8';");


$dotaz="SELECT udaje.id_studenta, udaje.jmeno, udaje.email, udaje.rok_ukonceni, udaje.preferovane_technologie, jazyky.jazyk FROM (udaje LEFT JOIN udaje_o_jazycích on udaje.id_studenta=udaje_o_jazycích.id_studenta) left join jazyky on udaje_o_jazycích.id_jazyka=jazyky.id_jazyka";
$data= mysqli_query($sp,$dotaz);
echo mysqli_error($sp);
mysqli_close($sp);
?>
<form action="index.php?stranka=vypis" method="$_POST">
<input type="text" name="rok" value="" ><p style="color: white;">Zadej rok</p><br>
  <select>
    <option value="Java"><p>Java</p></option>
    <option value="Python"><p>Python</p></option>
    <option value="C#"><p>C#</p></option>
    <option value="C++"><p>C++</p></option>
  </select>
  <input type="text" name="other" value=""><p style="color: white;">Jazyky:</p><br>
  <input type="submit" value="Odeslat">
</form>
</form>
<?php
// $rok=$_POST['rok'];
// $vyber_roku="SELECT * from udaje where rok = '$rok'";
// $ulozeni_roku=mysqli_query($sp,$vyber_roku);
// echo $rok;



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
    echo '</div></div>';    }
      ?>
    </div>
    </div>