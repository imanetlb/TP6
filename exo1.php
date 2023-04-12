
<?php
function toto($L, $C) {
  $L = floor($L/2); // On arrondit L à la moitié inférieure
  $C = floor($C/2); // On arrondit C à la moitié inférieure

  echo str_repeat("X", $C*2+1) . "<br>"; // On affiche la première ligne

  for ($i=0; $i<$L; $i++) {
    echo "X" . str_repeat(" ", $C*2-1) . "X<br>";
    echo str_repeat("X", $C*2+1) . "<br>";
  }
}

// Appel de la procédure toto avec l=7 et c=14
toto(7, 14);




    
function min_maj($str1) {
  $result = "";

  for ($i=0; $i<strlen($str1); $i++) {
    $char = $str1[$i];
    if (ctype_lower($char)) {
      $result .= strtoupper($char);
    } elseif (ctype_upper($char)) {
      $result .= strtolower($char);
    } else {
      $result .= $char;
    }
  }

  echo $result;
}

min_maj("wELCome mUssAB ZneIKA");






    
function mot_plus_long($str) {
  $mots = explode(" ", $str);
  $max_length = 0;
  $max_pos = -1;

  for ($i=0; $i<count($mots); $i++) {
    $length = strlen($mots[$i]);
    if ($length > $max_length) {
      $max_length = $length;
      $max_pos = $i;
    }
  }

  echo "Le mot le plus long est \"" . $mots[$max_pos] . "\" et sa position est " . $max_pos;
}


mot_plus_long("Mon premier cours commence aujourd'hui");

  ?>


