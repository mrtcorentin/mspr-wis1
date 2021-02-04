<?php

$page = [
    'title' => '404',
    'description' => 'La description de la page',
];


require_once 'template-parts/header.php'; ?>
    <main id="main">

        <section class="ghost">
            <div class="box">
                <div class="box__ghost">
                    <div class="symbol"></div>
                    <div class="symbol"></div>
                    <div class="symbol"></div>
                    <div class="symbol"></div>
                    <div class="symbol"></div>
                    <div class="symbol"></div>

                    <div class="box__ghost-container">
                        <div class="box1 box__ghost-eyes">
                            <div class="box1  box__eye-left"></div>
                            <div class="box1 box__eye-right"></div>
                        </div>
                        <div class="box__ghost-bottom">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="box__ghost-shadow"></div>
                </div>

                <div class="box__description">
                    <div class="box__description-container">
                        <div class="box__description-title">Whoops!</div>
                        <div class="box__description-text">Je pense que tu ne voulais pas atterrir ici !
                        </div>
                    </div>

                    <a href="https://codepen.io/diogo_ml_gomes/" target="_blank" class="box__button">On y retourne !</a>

                </div>

            </div>
        </section>
    </main>

<script src="src/js/404.js"></script>

<?php require_once 'template-parts/footer.php'; ?>