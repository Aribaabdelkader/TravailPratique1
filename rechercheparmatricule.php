<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php include 'acceuil.php';?>

</br></br>

<h2>  NOTES PAR ÉTUDIANT </h2>


</br></br>

<form action="rechercheparmatricule.php" method="POST">
<fieldset>
<input type="text" placeholder="entrer le code permanant" name="key" required></br>
 </br><input type="submit" name="recherche">
</fieldset>
</form>
</body>
</html>

<?php

require_once("tableaux.php");


if(isset($_POST["key"])&& isset($_POST["recherche"])){
    $key=$_POST["key"];
    $pregkey="/^[A-Z]{4}[0-9]{6}$/";// format code
    $groupes="";



    if(preg_match( $pregkey,$key)){

         $groupes=$NotesGroupe1+$NotesGroupe2;
       if($groupes != ""){
        $cle = array_keys($groupes);
        for($i=0;$i<count($groupes);$i++){
            if(preg_match( "/" .$cle[$i]."/",$key))// VÉRIFICATION  DE LA CLÉ
            {
            $etudiant= $groupes[$cle[$i]];




            echo "<table style='width:50%' border='3'>" .
                "<tr>" .
                "<th>PRÉNOM</th>" .
                "<th>NOM</th>" .
                "<th>SEXE</th>" .
                "<th>AGE</th>" .
                "<th>TP1</th>" .
                "<th>TP2</th>" .
                "<th>EXAMEN</th>" .
                "</tr>";

                echo "<td>" . $etudiant[0] . "</td>";
                echo "<td>" . $etudiant[1] . "</td>";
                echo "<td>" . $etudiant[2] . "</td>";
                echo "<td>" . $etudiant[3] . "</td>";
                echo "<td>" . $etudiant[4] . "</td>";
                echo "<td>" . $etudiant[5] . "</td>";
                echo "<td>" . $etudiant[6] . "</td>";


           }
    }

    }

    }
     else{

      ?>
        <span style="color:RED ;">

                      <?php
                       echo"</br>";

                        ?>
                      <?php echo "FORMAT INVALIDE : VEUILLEZ SAISIR LE CODE ÉTUDIANT SOUS LA FORME 4 LETTES MAJ ET 6 CHIFFRES "; ?>
                       </span>
                       <?php
}
}

?>
