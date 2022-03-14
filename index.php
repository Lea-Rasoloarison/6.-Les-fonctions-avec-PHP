<?php

$animal = ['le chat', 'le chien', 'la licorne', 'le dragon'];
$element =['Face à la mer', 'Face à la terre', 'Face au soleil', 'Face au vent'];

function exercice ($animals, $elements){
    return $animals . $elements ;
};

$randomAnimal = $animal[rand(0,3)];
$randomElement = $element[rand(0,3)];

echo $randomAnimal . ' '. "s'incline" . ' '. $randomElement;


?>



