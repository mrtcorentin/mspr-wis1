<?php

$page = [
    'title' => "S'inscrire",
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<main id="main">


<!--
   <section id="jumbotron-2">
<div class="icones">

       <ul>
           <li>
               <a href=""><img src="assets/svg/icon-facebook.svg"> </a>
           </li>
           <li>
               <a href=""><img src="assets/svg/icon-insta.svg"></a>
           </li>
           <li>
               <a href=""><img src="assets/svg/icon-linkedin.svg"></a>
           </li>
       </ul>

       </div>

   </section>
-->

    <section id="form">


        <div class="container">

            <form class="form">

                <div class="field  row  mt-4 mb-4">

                    <div class="col">
                        <span>Nom</span>
                        <input type="text" class="form-control" required placeholder="" aria-label="First name">
                    </div>
                    <div class="col">
                        <span>Prénom</span>
                        <input type="text" class="form-control" required placeholder="" aria-label="Last name">
                    </div>

                </div>

                <div class="field form-floating mt-4 mb-4">
                    <span>Email</span>
                    <input type="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                    <label for="floatingInput"></label>
                </div>

                <div class="field form-floating mt-4 mb-4">
                    <span>Adresse postale</span>
                    <input type="text" class="form-control" id="floatingPassword" required placeholder="">
                    <label for="floatingPassword"></label>
                </div>

                <div class="field row g-3 mt-4 mb-4">

                    <div class="col-sm-7">
                        <span>Ville</span>
                        <input type="text" class="form-control" placeholder="" required aria-label="City">
                    </div>
                    <div class="col-sm">
                        <span>CDP</span>
                        <input type="text" class="form-control" placeholder="" required aria-label="State">
                    </div>
                    <div class="col-sm">
                        <span>Date de naissance</span>
                        <input type="date" class="form-control" placeholder="" required aria-label="Zip">
                    </div>

                </div>

                <div class="field form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        CGU
                    </label>
                </div>

                <div class="btn-form">
                <button class="btn btn-secondary" type="submit">S'inscrire</button>
            </div>
            </form>

        </div>

    </section>


</main>


<?php require_once 'template-parts/footer.php'; ?>
