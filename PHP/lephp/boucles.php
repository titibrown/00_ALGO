<?php


$repetition = 0;
while ($repetition < 10) {
    echo ' <p> je ne dois pas copier sur mon voisin ' . $repetition  . ' fois.  </p>';
    $repetition++;
}

?>

<p> Ou bien : </p>

<?php


for ($repetition = 0; $repetition < 10; $repetition++) {

    echo ' <p> je ne dois pas copier sur mon voisin ' . $repetition  . ' fois.  </p>';
}



?>