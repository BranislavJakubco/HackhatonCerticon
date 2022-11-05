<!DOCTYPE html>
<html>
<head>
<style>
body {
    text-align: center;
}

</style>
</head>
<body>
</body>
</html>
<div class="row container" style="display: inline-block;">
        <div class="col-sm-12">
                <form class="formstyle mid" action="./PHP/insert.inc.php" method="post">
                        <h1 style="margin-bottom: 6%; text-align: center;" class="textik">Kontaktujte nás!</h1>
                        <input name="name" type="text" class="kontakt-input" placeholder="Jméno *" required />
                        <input name="email" type="text" class="kontakt-input" placeholder="Email *" required />
                        <input name="lokalita" type="text" class="kontakt-input" placeholder="Lokalita *" required /> <br>
                        <input name="school" type="text" class="kontakt-input" placeholder="Škola *" required /> <br>
                        <input name="yearEND" type="text" class="kontakt-input" placeholder="Rok ukončení SŠ*" required /> <br>


                        <div class="kontakt-input">
                                <p class="textik">Jaké programovací jazyky ovládáš?</p>
                                <input name="Java" type="checkbox" class="textik" /> Java<br>
                                <input name="Python" type="checkbox" class="textik" /> Python<br>
                                <input name="CSharp" type="checkbox" class="textik" /> C#<br>
                                <input name="CPlus" type="checkbox" class="textik" /> C++<br>

                        </div>


                        <input name="jazyk1" type="text" class="kontakt-input" placeholder="Jiné programovací jazyky" /> <br>
                        <input name="prefTechnology" type="text" class="kontakt-input" placeholder="Preferované technologie *" required /> <br>

                        <div class="kontakt-input">
                                <input name="GDPR" type="checkbox" required/> Souhlasím se zpracováním GDPR<br>
                        </div>


                        <input type="submit" value="Odeslat" />

                </form>
        </div>
</div>