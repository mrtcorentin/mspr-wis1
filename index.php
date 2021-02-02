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
                    <h1 class="content-wrapper">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

                    <img class="rounded"
                         src="assets/svg/housepackage.svg"
                         alt="un triangle aux trois côtés égaux"
                         height="650rem"
                         width="650rem"/>
                </div>

                <div class="text-center">
                    <img class="rounded"
                         src="assets/svg/googleplaystore.svg"
                         alt="un triangle aux trois côtés égaux"
                         height="150rem"
                         width="150rem"/>


                    <img class="rounded"
                         src="assets/svg/applestore.svg"
                         alt="un triangle aux trois côtés égaux"
                         height="150rem"
                         width="150rem"/>
                </div>
                <!--
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                -->
                <div class="text-xxl-center">
                    <h2 class="text-center">Lorem ipsum dolor sit amet.</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id
                        est laborum.</p>
                </div>
            </div>
        </section>

        <section id="home-images">
            <div class="container">
                <div class="text-center">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/svg/shopping3.svg" class="card-img-top" alt="Shopping">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <button type="button" class="btn btn-lg btn-primary"> Plus d'info</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/svg/mail.svg" class="card-img-top" alt="mail">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <button type="button" class="btn btn-lg btn-primary"> Inscrivez-Vous</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/svg/security.svg" class="card-img-top" alt="security">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <button type="button" class="btn btn-lg btn-primary"> Votre Sécuritez</button>
                                </div>
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