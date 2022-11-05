<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>
</head>
<body>
</body>
</html>

<div class="row">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left: 10%;" >
                <a class="navbar-brand" href="index.php?stranka=main" style="color: white;"><img src="assets/img/logo.png" alt="logo" style="width:150px;height:50px; margin-top: -7%"></a>
            </div>
            <ul class="nav navbar-nav" style="float: right; margin-right: 10%; margin-right: 10%; margin-top: 1px;">
                <li class="active"><a href="index.php?stranka=main">Domů</a></li>
                <li><a href="index.php?stranka=formular">Formulář</a></li>
        
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
                echo "<li><a href='PHP/logout.php'>Odhlásit se</li></a>";
            }
            
            else {

                echo '
                <li class="nav-item">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
                </a>
                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
                    <form class="form-horizontal" method="post" accept-charset="UTF-8">
                    Jméno: <br><input type="text" name="jmeno"> <br> 
                Heslo: <br><input type="password" name="heslo"> <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Login" />
                    </form>
                </div>
            </li>
                ';  
            };

            ?>
            
    </nav>
    <hr>  
</div>


</div>
</div>

</ul>