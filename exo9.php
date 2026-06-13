<?php
$etudiants = [
    ["nom" => "Awa", "note" => 15],
    ["nom" => "Omar", "note" => 8],
    ["nom" => "Idrissa", "note" => 12],
    ["nom" => "Mariama", "note" => 17],
    ["nom" => "Cheikh", "note" => 9]
];
echo "Liste des étudiants et notes :<br>";
foreach ($etudiants as $etudiant) {
    echo "- " . $etudiant["nom"] . " : " . $etudiant["note"] . "/20<br>";
}
echo "<br>";


$sommeNotes = 0;
foreach ($etudiants as $etudiant) {
    $sommeNotes += $etudiant["note"];
}
$moyenne = $sommeNotes / count($etudiants);
echo "Moyenne de la classe : " . $moyenne . "/20<br><br>";


$meilleurEtudiant = $etudiants[0];
foreach ($etudiants as $etudiant) {
    if ($etudiant["note"] > $meilleurEtudiant["note"]) {
        $meilleurEtudiant = $etudiant;
    }
}
echo "Meilleur(e) étudiant(e) :" . $meilleurEtudiant["nom"] . " avec " . $meilleurEtudiant["note"] . "/20<br><br>";

echo "Étudiants ayant la moyenne (>= 10) :<br>";
foreach ($etudiants as $etudiant) {
    if ($etudiant["note"] >= 10) {
        echo "- " . $etudiant["nom"] . " (" . $etudiant["note"] . "/20)<br>";
    }
}
?>