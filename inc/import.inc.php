<h2>Importování tabulky</h2>
    
<div class="outer-container">
    <form action="" method="post"
        name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div>
            <label>Vyberte Excel soubor</label><br> 
            <input type="file" name="file"
                id="file" accept=".xls,.xlsx"><br>
            <button type="submit" id="submit" name="import"
                class="btn-submit">Importovat</button>
        </div>
    </form>  
</div>
<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
$db = mysqli_connect("localhost", "root", "", "udaje");
mysqli_query($db, "SET NAMES 'utf8'");
$sqlSelect = "SELECT * FROM udaje";
$result = mysqli_query($db, $sqlSelect);
if (! empty($result)) {
?>  
    <table class='tutorial-table'>
    <table border='1'>
        <thead>
            <tr>
                <th>Časová značka</th>
                <th>Jméno studenta</th>
                <th>Lokalita</th>
                <th>Škola</th>
                <th>Rok ukončení</th>
                <th>Programovací jazyky</th>
                <th>GDPR souhlas</th>
            </tr>
        </thead>
<?php
    foreach ($result as $row) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['casova_znacka']; ?></td>
            <td><?php  echo $row['jmeno']; ?></td>
            <td><?php  echo $row['lokalita']; ?></td>
            <td><?php  echo $row['skola']; ?></td>
            <td><?php  echo $row['rok_ukonceni']; ?></td>,
            <td><?php  echo $row['programovaci_jazyky']; ?></td>
            <td><?php  echo $row['preferovane_technologie']; ?></td>
            <td><?php  echo $row['gdpr_souhlas']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>