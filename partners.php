<?php

$page = [
    'title' => 'Partenaires ',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<?php

$partners = [
    ['name' => 'Armand Femme',      'picture' => 'armandf.png',         'categories' => ['vetements-femme', 'vetement-homme']],
    ['name' => 'Armand Homme',      'picture' => 'armandh.png',         'categories' => 'vetements-homme'],
    ['name' => 'Au Pain Gourmand',  'picture' => 'aupaingourmand.png',  'categories' => 'alimentaire'],
    ['name' => 'Bershka',           'picture' => 'bershka.jpg',         'categories' => 'vetements-femme'],
    ['name' => 'Bio-coop',          'picture' => 'bio-coop.jpg',        'categories' => 'alimentaire'],
    ['name' => 'Carrefour City',    'picture' => 'carrefour-city.png',  'categories' => 'alimentaire'],
    ['name' => 'Celio',             'picture' =>  'celio.jpg',          'categories' => 'vetements-homme'],
    ['name' => 'Cop-Copine',        'picture' => 'cop-copine.png',      'categories' => 'vetements-femme'],
    ['name' => 'Courir',            'picture' => 'courir.jpg',          'categories' => 'vetements'],
    ['name' => 'Guess',             'picture' => 'guess.jpg',           'categories' => 'vetements'],
    ['name' => 'Julie-Laurent',     'picture' => 'julie-laurent.jpg',   'categories' => 'vetements-femme'],
    ['name' => 'Kaporal',           'picture' => 'kaporal.jpg',         'categories' => 'vetements'],
    ['name' => 'Lidl',              'picture' => 'lidl.png',            'categories' => 'alimentaire'],
    ['name' => 'M&O',               'picture' => 'm&o.png',             'categories' => 'alimentaire'],
    ['name' => 'Mango',             'picture' => 'mango.png',           'categories' => 'vetements'],
    ['name' => 'Naf-naf',           'picture' => 'naf-naf.jpg',         'categories' => 'vetements-femme'],
    ['name' => 'Olly-Gan',          'picture' => 'olly-gan.jpg',        'categories' => 'vetements-homme'],
    ['name' => 'Pharmacie',         'picture' => 'pharmacie.jpg',       'categories' => 'soins'],
    ['name' => 'Pimkie',            'picture' => 'pimkie.jpg',          'categories' => 'vetements-femme'],
    ['name' => 'Quater-Back',       'picture' => 'quater-back.jpg',     'categories' => 'vetements-homme'],
    ['name' => 'Récré',             'picture' => 'recre',               'categories' => 'autres'],
    ['name' => 'Spar',              'picture' => 'spar.jpg',            'categories' => 'alimentaire'],
    ['name' => 'SpringField.jpg',   'picture' => 'springfield',         'categories' => 'vetements'],
    ['name' => 'StreetShop',        'picture' => 'streetshop-cbd.jpg',  'categories' => 'soins'],
    ['name' => 'Undiz',             'picture' => 'undiz.png',           'categories' => 'vetements'],
    ['name' => 'Valège',            'picture' => 'valege.jpg',          'categories' => 'vetements-femme'],


];

var_dump($partners);
?>
