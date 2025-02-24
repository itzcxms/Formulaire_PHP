<?php
    session_start();
    if (isset($_SESSION['nom']) && isset($_SESSION['message'])) {
        echo "Bonjour ".$_SESSION['nom']." ! <br>";
        echo "Votre message est : ".$_SESSION['message']."<br>";
    }
?>

<br>
<button>
    <a href="messages.php">Voir tous les messages</a>
</button>

<h1>Formulaire</h1>
<form action="form.php" method="POST">
    <label>Nom</label>
    <input type="text" name="nom">
    <br><br>

    <label>Email</label>
    <input type="text" name="email">
    <br><br>

    <label>Message</label>
    <input type="text" name="message">
    <br><br>

    <input type="submit" value="Envoyer">
</form>

