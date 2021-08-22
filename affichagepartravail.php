



<?php


if (isset($_GET["groupe"]) && isset($_GET["examen"])) {
    require_once("tableaux.php");
    $numerodegroupe = $_GET["groupe"];
    $typeexamen = $_GET["examen"];
    $examenfinal = array(
        1 => "TP1",
        2 => "TP2",
        3 => "Examen final");
    $groupes = "";
    if ($numerodegroupe == 0) {
        $groupes = $NotesGroupe1;
    } else if ($numerodegroupe == 1) {
        $groupes = $NotesGroupe2;
    }
    if ($groupes != "") {
        $cle = array_keys($groupes); // RECUPÉRATION  D'UNE PARTIE D'UN CLÉ DANS UN TABLEAU
    }

    echo "<table width='50%' border='3'>" .
        "<tr>" .
        "<th>PRÉNOM</th>" .
        "<th>NOM</th>" .
        "<th>" . $examenfinal[$typeexamen] . "</th>" .
        "</tr>";

    $total = 0;     // AFFICHAGE DU RÉSULTAT
    for ($i = 0; $i < count($groupes); $i++) {
        $etudiant = $groupes[$cle[$i]];
        $total += $etudiant[$typeexamen + 3];
        echo "<tr>";
        echo "<td>" . $etudiant[0] . "</td>";
        echo "<td>" . $etudiant[1] . "</td>";
        echo "<td>" . $etudiant[$typeexamen + 3] . "</td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='2'>Moyenne</td><td>" . $total / count($groupes) . "</td></tr>";
    echo "</table>";

    echo "<a href='acceuil.php'> RETOUR AU MENU  </a>"; // RETOUR AU MENU PRINCIPAL
}
?>
