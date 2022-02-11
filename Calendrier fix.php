<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd%22%3E
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> <?php echo "Premiers pas en PHP"; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php

$tableau = array(
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Aout",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre",
);

foreach($tableau as $key => $valeur)
    {
    echo "<br>";
        if ($key < 8){
        if ($key == 2){
            echo 'Le mois de '. $valeur . ' contient 28 jours';

        }
        elseif (($key % 2) == 1){
        echo 'Le mois de '. $valeur . ' contient 31 jours';

        }
        elseif (($key % 2) == 0){
            echo 'Le mois de '. $valeur . ' contient 30 jours';
        }
    }
    elseif (($key % 2) == 0){
        echo 'Le mois de '. $valeur . ' contient 31 jours';

        }
        elseif (($key % 2) == 1){
            echo 'Le mois de '. $valeur . ' contient 30 jours';
        }

}

?>
</body>
</html>