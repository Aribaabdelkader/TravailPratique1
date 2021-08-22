


<!--formulaire d'affichage des notes par travail-->
<form method="GET" action="affichagepartravail.php">
        <fieldset>
            <div class="menu">

                 <?php require 'acceuil.php';?>

                 </br></br></br>

                  <h2>NOTES PAR TRAVAIL </h2>
</br></br>
            </div>
            GROUPE : </br></br>
            <select name="groupe">
                            <option value='0'>GROUPE 1</option>
                            <option value='1'>GROUPE 2</option>

            </select>

            </br></br>
          </br> TYPE DE TRAVAIL  :</br></br>

             <select name="examen">
                            <option value='1'>TP 1</option>
                            <option value='2'>TP 2</option>
                            <option value='3'>EXAMEN FINAL </option>

            </select>

</br></br>
</br> <input type="submit"  name="submit"value="Envoyer "/>
            </fieldset>
</form>
