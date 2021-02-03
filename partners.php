<?php

$page = [
    'title' => 'Partenaires ',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<?php


$partners = [
        'armandF' => ['name' => 'Armand Femme' , 'picture' => 'armandf.png' , 'categories' => 'vetements-femme'],
        'armandH' => ['name' => 'Armand Homme' , 'picture' => 'armandh.png' , 'categories' => 'vetements-homme'],
        'aupaingourmand' => ['name' => 'Au Pain Gourmand', 'picture' => 'aupaingourmand.png' , 'categories' => 'alimentaire' ],
        'bershka' => ['name' => 'Bershka', 'picture' => 'bershka.jpg' , 'categories' => 'vetements-femme' ],
        'bio-coop' => ['name' => 'Bio-coop', 'picture' => 'bio-coop.jpg' , 'categories' => 'alimentaire' ],
        'carrefour-city' => ['name' => 'Carrefour City', 'picture' => 'carrefour-city.png' , 'categories' => 'alimentaire' ],
        'celio' => ['name' => 'Celio', 'picture' => 'celio.jpg' , 'categories' => 'vetements-homme' ],
        'cop-copine' => ['name' => 'Cop-Copine', 'picture' => 'cop-copine.png' , 'categories' => 'vetements-femme' ],
        'courir' => ['name' => 'Courir', 'picture' => 'courir.jpg' , 'categories' => 'vetements' ],
        'guess' => ['name' => 'Guess', 'picture' => 'guess.jpg' , 'categories' => 'vetements' ],
        'julie-laurent' => ['name' => 'Julie-Laurent', 'picture' => 'julie-laurent.jpg' , 'categories' => 'vetements-femme' ],
        'kaporal' => ['name' => 'Kaporal', 'picture' => 'kaporal.jpg' , 'categories' => 'vetements' ],
        'lidl' => ['name' => 'Lidl', 'picture' => 'lidl.png' , 'categories' => 'alimentaire' ],
        'm&o' => ['name' => 'M&O', 'picture' => 'm&o.png' , 'categories' => 'alimentaire' ],
        'mango' => ['name' => 'Mango', 'picture' => 'mango.png' , 'categories' => 'vetements' ],
        'naf-naf' => ['name' => 'Naf-naf', 'picture' => 'naf-naf.jpg' , 'categories' => 'vetements-femme' ],
        'olly-gan' => ['name' => 'Olly-Gan', 'picture' => 'olly-gan.jpg' , 'categories' => 'vetements-homme' ],
        'pharmacie' => ['name' => 'Pharmacie', 'picture' => 'pharmacie.jpg' , 'categories' => 'soins' ],
        'pimkie' => ['name' => 'Pimkie', 'picture' => 'pimkie.jpg' , 'categories' => 'vetements-femme' ],
        'quater-back' => ['name' => 'Quater-Back', 'picture' => 'quater-back.jpg' , 'categories' => 'vetements-homme' ],
        'recre' => ['name' => 'Récré', 'picture' => 'recre' , 'categories' => 'autres' ],
        'spar' => ['name' => 'Spar', 'picture' => 'spar.jpg' , 'categories' => 'alimentaire' ],
        'springfield' => ['name' => 'SpringField.jpg', 'picture' => 'springfield' , 'categories' => 'vetements' ],
        'streetshop' => ['name' => 'StreetShop', 'picture' => 'streetshop-cbd.jpg' , 'categories' => 'soins' ],
        'undiz' => ['name' => 'Undiz', 'picture' => 'undiz.png' , 'categories' => 'vetements' ],
        'valege' => ['name' => 'Valège', 'picture' => 'valege.jpg' , 'categories' => 'vetements-femme' ],



];
echo $partners ;
var_dump($partners);
?>
