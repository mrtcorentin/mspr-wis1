<?php

$page = [
    'title' => 'Partenaires ',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<?php

$partners = [
    ['name' => 'Armand Femme',      'picture' => 'armandf.png',         'categories' => ['vetements-femme', 'vetements-homme']],
    ['name' => 'Armand Homme',      'picture' => 'armandh.png',         'categories' => ['vetements-homme']],
    ['name' => 'Au Pain Gourmand',  'picture' => 'aupaingourmand.png',  'categories' => ['alimentaire']],
    ['name' => 'Bershka',           'picture' => 'bershka.jpg',         'categories' => ['vetements-femme']],
    ['name' => 'Bio-coop',          'picture' => 'bio-coop.png',        'categories' => ['alimentaire']],
    ['name' => 'Carrefour City',    'picture' => 'carrefour-city.png',  'categories' => ['alimentaire']],
    ['name' => 'Celio',             'picture' => 'celio.jpg',           'categories' => ['vetements-homme']],
    ['name' => 'Cop-Copine',        'picture' => 'cop-copine.png',      'categories' => ['vetements-femme']],
    ['name' => 'Courir',            'picture' => 'courir.jpg',          'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'Guess',             'picture' => 'guess.jpg',           'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'Julie-Laurent',     'picture' => 'julie-laurent.jpg',   'categories' => ['vetements-femme']],
    ['name' => 'Kaporal',           'picture' => 'kaporal.png',         'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'Lidl',              'picture' => 'lidl.png',            'categories' => ['alimentaire']],
    ['name' => 'M&O',               'picture' => 'm&o.png',             'categories' => ['alimentaire']],
    ['name' => 'Mango',             'picture' => 'mango.png',           'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'Naf-naf',           'picture' => 'naf-naf.jpg',         'categories' => ['vetements-femme']],
    ['name' => 'Olly-Gan',          'picture' => 'olly-gan.jpg',        'categories' => ['vetements-homme']],
    ['name' => 'Pharmacie',         'picture' => 'pharmacie.jpg',       'categories' => ['soins']],
    ['name' => 'Pimkie',            'picture' => 'pimkie.jpg',          'categories' => ['vetements-femme']],
    ['name' => 'Quater-Back',       'picture' => 'quater-back.jpg',     'categories' => ['vetements-homme']],
    ['name' => 'Récré',             'picture' => 'recre',               'categories' => ['autres']],
    ['name' => 'Spar',              'picture' => 'spar.jpg',            'categories' => ['alimentaire']],
    ['name' => 'SpringField',       'picture' => 'springfield.jpg',     'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'StreetShop',        'picture' => 'streetshop-cbd.jpg',  'categories' => ['soins']],
    ['name' => 'Undiz',             'picture' => 'undiz.png',           'categories' => ['vetements-homme', 'vetements-femme']],
    ['name' => 'Valège',            'picture' => 'valege.jpg',          'categories' => ['vetements-femme']],

];
?>

    <main id="main">
        <section id="home-presentation">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <h1 class="my-3 my-sm-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam officia
                        quisquam quos tempora?
                        Accusantium adipisci assumenda consectetur cumque deleniti dolorem dolorum facere, illum ipsam
                        laborum laudantium libero,
                        officiis possimus provident quaerat quasi, quia quo unde vitae voluptates! Amet aspernatur at
                        , consequatur culpa debitis dolorem et modi, officia quis, velit vitae!</p>

                    <div class="text-center">
                        <select class="form-select" >
                            <option selected>Catégories</option>
                            <option value="1">Alimentaire</option>q
                            <option value="2">Soins</option>
                            <option value="3">Vêtements Homme</option>
                            <option value="3">Vêtements Femme</option>
                        </select>
                    </div>


                    <?php foreach ($partners as $partner): ?>
                        <div class="card" style="width: 18rem;">
                            <h2 class="card-title"> <?php echo $partner['name']; ?></h2>
                            <a href="register.php">
                                <img class="card-img-top" src="assets/images/<?php echo $partner['picture']; ?>"
                                     height="200"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>
    </main>

<?php require_once 'template-parts/footer.php'; ?>