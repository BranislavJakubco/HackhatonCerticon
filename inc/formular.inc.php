<div class="row container">
        <div class="col-sm-12">
                <form class="formstyle " action="./PHP/insert.inc.php" method="post">
                        <h1 style="margin-bottom: 6%; text-align: center;" class="textik">Kontaktujte nás!</h1>
                        <input name="name" type="text" class="kontakt-input" placeholder="Jméno"/>
                        <input name="lokalita" type="text" class="kontakt-input" placeholder="Lokalita" /> <br>
                        <input name="school" type="text" class="kontakt-input" placeholder="Škola" /> <br>
                        <input name="yearEND" type="text" class="kontakt-input" placeholder="Rok ukončení" /> <br>

                        
                        <div class="kontakt-input">
                                <p class="textik">Jaké programovací jazyky ovládáš?</p>
                                <input name="java" type="checkbox" class="textik" /> Java<br>
                                <input name="python" type="checkbox" class="textik"/> Python<br> 
                                <input name="cPlus" type="checkbox" class="textik"/> C++<br> 
                                <input name="cSharp" type="checkbox" class="textik"/> C#<br> 
                        </div>
                        

                        <input name="jazyk" type="text" class="kontakt-input" placeholder="Jiné programovací jazyky" /> <br>
                        <input name="prefTechnology" type="text" class="kontakt-input" placeholder="Preferované technologie *" /> <br>

                        <div class="kontakt-input">
                                <input name="java" type="checkbox" required/> Souhlasím se zpracováním GDPR<br>
                        </div>


                        <input type="submit" value="Odeslat" />
                </form>
        </div>
</div>
