<button>
    <a href="index.php">Accueil</a>
</button>
<br><br>

<?php

// On stocke les données récupérées dans des variables
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'].'
';

// Affichage
echo "<strong>Nom</strong> : $nom <br><br>";
echo "<strong>Email</strong> : $email <br><br>";
echo "<strong>Message</strong> : $message <br><br>";

// Écriture dans le fichier messages.txt
$fichier = "message.txt"; // Chemin
$fichierOpen = (fopen("$fichier", "a+")); // On ouvre en lecture/écriture
fwrite($fichierOpen, $message); // On écrit
fclose($fichierOpen); // On ferme

// Session
session_start();
// On stocke les données dans la session
$_SESSION['nom'] = $nom;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;

