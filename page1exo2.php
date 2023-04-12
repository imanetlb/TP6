<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sex = "";
    if (isset($_POST['male'])) {
        $sex = "Male";
    } elseif (isset($_POST['female'])) {
        $sex = "Femelle";
    }
    $selectedClass = $_POST['select-class'];

    echo "NOM: $nom<br>";
    echo "Prénom: $prenom<br>";
    echo "Sex: $sex<br>";
    echo "Classe sélectionnée: $selectedClass";
}
?>
