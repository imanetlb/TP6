<?php

function affiche_mots() {
    $filename = "test.txt";

    if (!file_exists($filename)) {
        echo "Le fichier $filename n'existe pas.\n";
        return;
    }

    $file = fopen($filename, "r");

    if (!$file) {
        echo "Erreur lors de l'ouverture du fichier $filename.\n";
        return;
    }

    while (!feof($file)) {
        $line = fgets($file);
        $words = explode(" ", $line);

        foreach ($words as $word) {
            
            $word = trim($word, " \t\n\r\0\x0B.,;:!?'\"");

            if (strlen($word) < 4) {
                echo $word . "\n";
            }
        }
    }

    fclose($file);
}
affiche_mots();
?>
