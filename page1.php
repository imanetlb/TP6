<?php
// tableau associatif contenant les noms d'utilisateur et les mots de passe
$users = array(
    "user1" => "password1",
    "user2" => "password2",
    "user3" => "password3",
    "user4" => "password4",
    "user5" => "password5"
);

// vérifier si le formulaire de connexion a été soumis
if (isset($_POST["username"]) && isset($_POST["password"])) {
    // récupérer les valeurs soumises
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // vérifier si les informations de connexion sont valides
    if (array_key_exists($username, $users) && $users[$username] == $password) {
        // afficher un message de bienvenue
        echo "Bienvenue, " . $username . "!";
    } else {
        // rediriger vers la page de connexion
        header("Location: login.html");
        exit();
    }
} else {
    // rediriger vers la page de connexion
    header("Location: login.html");
    exit();
}
?>