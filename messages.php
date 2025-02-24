<?php
// Chemin du fichier
$fichier = "message.txt";
// On ouvre avec file
$read = file($fichier);

// Boucle pour lire ligne par ligne
for ($i = 0; $i < count($read); $i++) {
    echo "n°" . $i . " : " . $read[$i] . "<br>";
}