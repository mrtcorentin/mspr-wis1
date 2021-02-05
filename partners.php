<?php

$page = [
    'title' => 'Partenaires ',
    'description' => 'La description de la page',
];

<<<<<<< HEAD
if (isset($_GET) && isset($_GET['category'])) {
    $filter = $_GET['category'];
} else {
    $filter = null;
}

require_once 'template-parts/header.php';

=======
require_once 'template-parts/header.php';

>>>>>>> main
require_once 'template-parts/db.php';
?>


    <main id="main">

        <section id="partners-presentation">
            <div class="container">

                <h1 class="my-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam officia
                    quisquam quos tempora? Accusantium adipisci assumenda consectetur cumque deleniti dolorem
                    dolorum facere, illum ipsam
                    laborum laudantium libero, officiis possimus provident quaerat quasi, quia quo unde vitae
                    voluptates! Amet aspernatur at, consequatur culpa debitis dolorem et modi, officia quis, velit
                    vitae!</p>


                <form action="" method="GET" class="mb-5 mx-auto" style="max-width: 570px;">
                    <div class="input-group">
                        <select name="category" class="form-select">
<<<<<<< HEAD
                            <option value="" <?php echo !$filter ? 'selected' : null; ?>>Toutes les catégories
                            </option>
                            <option <?php echo $filter === 'alimentaire' ? 'selected' : null; ?>
                                    value="alimentaire">
                                Alimentaire
                            </option>
                            <option <?php echo $filter === 'autres' ? 'selected' : null; ?>
                                    value="autres">
                                Autres
                            </option>
                            <option <?php echo $filter === 'vetements-homme' ? 'selected' : null; ?>
                                    value="vetements-homme">
                                Vêtements Homme
                            </option>
                            <option <?php echo $filter === 'vetements-femme' ? 'selected' : null; ?>
                                    value="vetements-femme">
                                Vêtements Femme
                            </option>
=======
                            <option disabled selected>Catégories</option>
                            <option value="1">Alimentaire</option>
                            <option value="2">Soins</option>
                            <option value="3">Vêtements Homme</option>
                            <option value="3">Vêtements Femme</option>
>>>>>>> main
                        </select>
                        <button type="submit" class="input-group-text btn btn-primary">Recherche</button>
                    </div>
                </form>
<<<<<<< HEAD

            </div>
        </section>
=======
>>>>>>> main

            </div>
        </section>

        <section id="partners-cards">
            <div class="container">
<<<<<<< HEAD

                <?php shuffle($partners); ?>

                <?php if (isset($partners)): ?>
                    <div class="row g-4">
                        <?php if ($filter): ?>
                            <?php foreach ($partners as $partner): ?>
                                <?php if (in_array($filter, $partner['categories'])): ?>
                                    <div class="col-md-6 col-lg-3">
                                        <?php require 'template-parts/product.php'; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach ($partners as $partner): ?>
                                <div class="col-md-6 col-lg-3">
                                    <?php require 'template-parts/product.php'; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
=======

                <?php if (isset($partners)): ?>
                    <div class="row g-4">
                        <?php foreach ($partners as $partner): ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-header"> <?php echo $partner['name']; ?></div>
                                    <img class="card-img-top"
                                         src="assets/images/<?php echo $partner['picture']; ?>"
                                         alt="">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            bulk of the card's content.</p>
                                        <a href="register.php">
                                            <span class="visually-hidden">Inscrivez-vous</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
>>>>>>> main
                    </div>
                <?php endif; ?>

            </div>
        </section>
    </main>

<?php require_once 'template-parts/footer.php'; ?>