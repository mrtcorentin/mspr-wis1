<?php

$page = [
    'title' => "S'inscrire",
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

<main id="main">



   <section id="jumbotron-2">

       <div class="img">

       </div>



   </section>

<section id="form">
    

    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nom" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="Last name">
        </div>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Adresse postale</label>
    </div>

</section>





</main>


<?php require_once 'template-parts/footer.php'; ?>
