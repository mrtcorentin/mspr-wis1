<?php

$page = [
    'title' => 'Accueil',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

    <main id="main">
        <section id="home-presentation">
            <div class="container">
                <div class="first">
                    <h1 class="text-xxl-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                    <img
                            src="assets/svg/delivery.svg"
                            alt="un triangle aux trois côtés égaux"
                            height="1000rem"
                            width="1000rem"/>
                </div>
                <div class="button">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                </div>
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>
            </div>
        </section>

        <section id="home-images">
            <div class="container">

                <div class="row g-4 justify-content-center">
                    <div class="col-sm-6 col-md-4 align-self-center">
                        <img src="assets/svg/shopping2.svg" alt="un triangle aux trois côtés égaux">
                    </div>
                    <div class="col-sm-6 col-md-4 align-self-center">
                        <img src="assets/svg/mail.svg" alt="un triangle aux trois côtés égaux">
                    </div>
                    <div class="col-sm-6 col-md-4 align-self-center">
                        <img src="assets/svg/security.svg" alt="un triangle aux trois côtés égaux">
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