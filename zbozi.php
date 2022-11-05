<?php
$sp = mysqli_connect("localhost", "root", "", "zbozi");
mysqli_query($sp, "SET NAMES'utf8';");
if ( isset($_GET['smazat']) ) {
    $dotaz = "DELETE FROM zbozi WHERE id_zbozi='{$_GET['id_zbozi']}';";
    $radku_smazano = mysqli_query($sp, $dotaz);
}

if ( isset($_GET['upravit']) ) {
  $dotaz = "SELECT * FROM zbozi WHERE id_zbozi='{$_GET['id_zbozi']}';";
  $result = mysqli_query($sp, $dotaz);
  $row = mysqli_fetch_array($result);

  $id_zbozi=$row['id_zbozi'];
  $nazev=$row['nazev'];
  $cena=$row['cena'];
  $baleni=$row['baleni'];
  $id_vyrobce=$row['id_vyrobce'];
}
if ( isset($_GET['update']) ) {
  $dotaz = "UPDATE zbozi
           SET 
                   nazev='{$_GET['nazev']}',
                   cena='{$_GET['cena']}',
                   baleni='{$_GET['baleni']}',
                   id_vyrobce='{$_GET['id_vyrobce']}'
                   WHERE id_zbozi='{$_GET['id_zbozi']}'
                  ;";
  $radku_vlozeno = mysqli_query($sp, $dotaz);
}

$dotaz = "SELECT * FROM zbozi;";
$data = mysqli_query($sp, $dotaz);
echo mysqli_error($sp);
mysqli_close($sp);
?>
<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>DB</title>
    <meta charset='utf-8'>
  </head>
  <body>
  <?php
  if (isset($_GET['upravit'])) {
    echo"
    
    <form action='' method='get'>
  <br><br><br>
  <input type='hidden' name='id_zbozi' value='$id_zbozi'>
    Název:
    <input type='text' name='nazev' value='$nazev'>
    Cena:
    <input type='number' name='cena' value='$cena'>
    Balení:
    <input type='text' name='baleni' value='$baleni'>
    ID Výrobce:
    <input type='number' name='id_vyrobce' value='$id_vyrobce'>
    <input type='submit' name='update' value='Upravit záznam'>
    <br><br><br>
  </form>";
    
    ;
   }
  else {
    echo "
  <form action='' method='get'>
  <br><br><br>
    <input type='text' name='nazev' placeholder='Nazev'>
    <input type='number' name='cena' placeholder='Cena'>
    <input type='text' name='baleni' placeholder='Balení'>
    <input type='number' name='id_vyrobce' placeholder='ID Výrobce'>
    <input type='submit' name='odeslat' value='Vlož nový záznam'>
    <br><br><br>
  </form>";

    echo "<table border='1'>";
    echo "<tr>
            <th>Název</th>
            <th>Cena</th>
            <th>Balení</th>
            <th>ID Výrobce</th>
            <th colspan='2'>Edit</th>
          </tr>";
    while ($zaznam = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td>{$zaznam['nazev']}</td>";
        echo "<td>{$zaznam['cena']}</td>";
        echo "<td>{$zaznam['baleni']}</td>";
        echo "<td>{$zaznam['id_vyrobce']}</td>";
        echo "<td>
                <form action='' method='get'>
                    <input type='hidden' name='id_zbozi' value='{$zaznam['id_zbozi']}'>
                    <input type='submit' name='smazat' value='X'>
                </form>   
                </td>
                <td>
                <form action='' method='get'>
                    <input type='hidden' name='id_zbozi' value='{$zaznam['id_zbozi']}'>
                    <input type='submit' name='upravit' value='U'>
                </form>                                                   
              </td>";
        echo "</tr>";
    }               
    echo "</table>";
  }
?>
  </body>
</html>