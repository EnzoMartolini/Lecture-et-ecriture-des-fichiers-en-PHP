

<?php 
$ressource = fopen('pizza.tsv', 'r');

while ($line = fgets($ressource)){
    $line = explode("\t", $line);
    $line_explode=$line[0];

    $Titre='';
    $Nom='';
    $Ingredients='';
    $Prix='';

    if (isset($line[0])) {
        $Titre=$line[0];
    };


    if (isset($line[1])) {
        $Nom=$line[1];
    };

    if (isset($line[2])) {
        $Ingredients=$line[2];
    };

    if (isset($line[3])) {
        $Prix=$line[3];
    };

    echo <<<HTML
        <h3>$Titre</h3>
        <ul>
        <strong>$Nom</strong>
        <p>$Ingredients<strong> $Prix</strong></p>
        </ul>

HTML;

}




?>