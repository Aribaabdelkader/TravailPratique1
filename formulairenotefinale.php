<!--formulaire d'affichage des notes finales-->
<form method="GET" action="affichageparnotefinale.php">
        <fieldset>
            <div class="menu">
                 <?php include 'acceuil.php';?>

                   <br><br><br>
                  <h2>NOTES FINALES </h2>

            </div>
            GROUPE :
            <select name="groupe">
                            <option value='0'>GROUPE 1</option>
                            <option value='1'>GROUPE 2</option>
                            <option value='2'>GROUPE 1 ET 2</option>
            </select>
            <br>
            NOTES ÉLÉVES EN SITUATION D'ÉCHEC :
            <input type="checkbox"name="echec"value="selectionner"/></br>
            HOMME ET FEMMES : <input type="radio"name="sexe"value="M|F"checked="checked"/></br>
            HOMMES : <input type="radio"name="sexe"value="M"/></br>
            FEMMES : <input type="radio"name="sexe"value="F"/></br>  <br>  <br>

            <input type="submit"value="Envoyer"/>
            </fieldset>
</form>
