<div class="row">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left: 10%;">
                <a class="navbar-brand" href="#">MakejvIT</a>
            </div>
            <ul class="nav navbar-nav" style="float: right; margin-right: 10%;">
                <li class="active"><a href="index.php?stranka=main">Domů</a></li>
                <li><a href="index.php?stranka=formular">Formulář</a></li>
                <li><a href="index.php?stranka=login">Login</a></li>
                <?php
        if(isset($_SESSION['login']) && $_SESSION['login']==1){
            echo '
                <li>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 7%;">Databáze</button>

                        <ul class="dropdown-menu">
                            <li><a href="index.php?stranka=vypis">Zobrazení</a></li>
                            <li><a href="index.php?stranka=editdatabase">Edit</a></li>
                            <li><a href="index.php?stranka=import">Import</a></li>
                        </ul>
                    </div>
                </li>';
            };
            ?>
                
    </nav>
</div>


</div>
</div>

</ul>