<?php

$page = [
    'title' => 'Accueil',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<main id="main">

    <section id="home-presentation">
        <div class="container">
            <div class="text-center">
                <h1 class="text h1-home"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                <img class="rounded"
                     src="assets/svg/housepackage.svg"
                     alt="home-icon"
                     height="500rem"
                     width=auto/>
            </div>

            <div class="text-center">
                <a href="https://play.google.com/store"><img class="appli"
                                                             src="assets/svg/googleplaystore.svg"
                                                             alt="un triangle aux trois côtés égaux"
                                                             height="150rem"
                                                             width="150rem"/> </a>

                <a href="https://www.apple.com/app-store/"><img class="appli"
                                                                src="assets/svg/applestore.svg"
                                                                alt="un triangle aux trois côtés égaux"
                                                                height="150rem"
                                                                width="150rem"/> </a>
            </div>

        </div>
    </section>

    <section id="home-images">
        <div class="container">

            <div class="heading-wrapper">
                <h2 class="text h2-home">Lorem ipsum dolor sit amet.</h2>
                <p class="text p-home">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim
                    id est laborum.</p>
            </div>

            <div class="row g-4 justify-content-center animate__animated animate__fadeInUp animate__delay-1.5s">

                <div class="col-lg-4">
                    <div class="card text-center h-100">
                        <img src="assets/svg/shopping3.svg" class="card-img-top" alt="Shopping">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <a type="button" class="btn btn-lg btn-primary" href="notre-concept.php"> Plus
                                d'infos
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card text-center h-100">
                        <img src="assets/svg/mail.svg" class="card-img-top" alt="mail">
                        <div class="card-body">
                            <h5 class="card-title">Rejoignez nous !</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a type="button" class="btn btn-lg btn-primary" href="registration.php">
                                S'inscrire</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card text-center h-100">
                        <img src="assets/svg/security.svg" class="card-img-top" alt="security">
                        <div class="card-body">
                            <h5 class="card-title">Votre sécurité, notre priorité :</h5>
                            <p class="card-text">
                                Click & Share met tout en œuvre pour assurer la sécurité de ses clients et la
                                fiabilité des livraisons.
                            </p>
                            <a type="button" class="btn btn-lg btn-primary" href="security.php"> En savoir plus</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--
    <div class="button-2">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-black">Secondary</button>
    </div>
    -->
</main>


<?php require_once 'template-parts/footer.php'; ?>