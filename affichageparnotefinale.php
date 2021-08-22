

<?php
require_once("tableaux.php");

if (isset($_GET["groupe"]) && isset($_GET["sexe"])) {
    $numerodegroupe = $_GET["groupe"];

    $typesexe = $_GET["sexe"];
    $pregSexe = "/" . $typesexe . "/";

    $groupes = "";
    if ($numerodegroupe == 0) {
        $groupes = $NotesGroupe1;
    } else if ($numerodegroupe == 1) {
        $groupes = $NotesGroupe2;
    } else {
        $groupes = $NotesGroupe1 + $NotesGroupe2;
    }


    if ($groupes != "") {
        $cle = array_keys($groupes);// récupération des clés


        echo "<table style='width:50%' border='3'>" . // AFFICHAGE DU RÉSULTAT
            "<tr>" .
            "<th>Prenom</th>" .
            "<th>nom</th>" .
            "<th>sexe</th>" .
            "<th>TP1</th>" .
            "<th>TP2</th>" .
            "<th>Examen</th>" .
            "<th>Moyenne</th>" .
            "</tr>";

        for ($i = 0; $i < count($groupes); $i++) {
            $etudiant = $groupes[$cle[$i]];
            $prenom = $etudiant[0];
            $nom = $etudiant[1];
            $typesexe = $etudiant[2];
            $age = $etudiant[3];
            $tp1 = 0.2 * $etudiant[4];
            $tp2 = 0.4 * $etudiant[5];
            $examenfinal = 0.4 * $etudiant[6];
            $moyennegenerale = ($tp1 + $tp2 + $examenfinal) ;


            if (preg_match($pregSexe, $typesexe)) {
                if (isset($_GET["echec"])) {
                    if ($moyennegenerale >= 60) {
                        continue;
                    }
                }
                echo "<tr>" .
                    "<td>" . $prenom . "</td>" .
                    "<td>" . $nom . "</td>" .
                    "<td>" . $typesexe . "</td>" .
                    "<td>" . $tp1 . "</td>" .
                    "<td>" . $tp2 . "</td>" .
                    "<td>" . $examenfinal . "</td>" .
                    "<td>" . $moyennegenerale . "</td>" .
                    "</tr>";

            }
        }

    }
}
echo "<a href='acceuil.php'> RETOUR AU MENU  </a>";
?>
