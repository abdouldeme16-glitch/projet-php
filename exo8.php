<?php
 $personnes = [
    [
        "nom" => "Ali",
        "age" => 25
    ],
    [
        "nom" => "Fatou",
        "age" => 22
    ],
    [
        "nom" => "Moussa",
        "age" => 30
    ]
];
 echo " Liqte des nom de pzesonne : <br>";
  echo "Liste des noms :<br>";
foreach ($personnes as $personne) {
    echo "- " . $personne["nom"] . "<br>";
}
echo "<br>";

$plusAgee = $personnes[0];
foreach ($personnes as $personne) {
    if ($personne["age"] > $plusAgee["age"]) {
        $plusAgee = $personne;
    }
}
echo "Personne la plus âgée : " . $plusAgee["nom"] . " (" . $plusAgee["age"] . " ans)\n\n";

$nombrePersonnes = count($personnes);
echo "<strong>Nombre total de personnes :</strong> " . $nombrePersonnes . "\n";
?>