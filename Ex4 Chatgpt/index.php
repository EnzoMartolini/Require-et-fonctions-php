<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

// Écrivez une fonction qui prend un tableau de nombres en entrée et renvoie la somme de tous les nombres du tableau.
$nombre = [2, 5, 8, 9];
function calcul($array){

    echo $somme = array_sum($array) . '</br>';
}

calcul($nombre);


 //Écrivez une fonction qui prend un tableau de chaînes de caractères en entrée et renvoie un nouveau tableau avec toutes les chaînes triées par ordre alphabétique.
 $mots = ['alphabet', 'goutière', 'zebre', 'hectare'];

 function ordre($array){

    asort($array);

    foreach ($array as $value):
        echo $value . '</br>';
    endforeach;

 }

 ordre($mots);

 $mots_inverse = [ 1=> 'alphabet', 2=> 'goutière', 3=>'zebre',4=> 'hectare'];

 function inverse($array){

    $array_inverse=array_flip($array);

    foreach ($array_inverse as $key => $value):
        echo 'Valeur : ' . $value . ' Clé : ' . $key . '</br>';
    endforeach;

 }

 inverse($mots_inverse);

 function moyenne($array){
    $somme=array_sum($array);
    $dividende=count($array);
    $resultat=$somme/$dividende;

    echo $resultat . '</br>';
 }

 moyenne($nombre);

 $tableau = ['a' => 1, 'b' => null, 'c' => 3];

 function filtre($array){

    $nouveau_tableau = [];

    foreach ($array as $key =>$value):
        if($value !== null):
            $nouveau_tableau[$key]=$value;
        endif;
    endforeach;

    return $nouveau_tableau;
}

echo var_dump(filtre($tableau)) . '</br>';

$array = ['b' => 2, 'a' => ['d' => 4, 'c' => 3]];

function trier($array){
    ksort($array);
    foreach ($array as $key => $value){
        if (is_array($value)){
            $array[$key] = trier($value);
        }
    }
    return $array;
}

$nouveau_tableau = trier($array);

print_r($nouveau_tableau);

 ?>

 
</body>
</html>