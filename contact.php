<?php

$page = [
    'title' => 'Contact',
    'description' => 'La description de la page',
];

require_once 'template-parts/header.php'; ?>

    <main id="main">

        <section id="contact-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4 offset-lg-1 order-lg-2">
                        <div class="form-wrapper">

                            <h2>Envoyez nous un message</h2>

                            <form action="">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name">Prénom</label>
                                            <input class="form-control" type="text" name="first_name" id="first_name"
                                                   required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name">Nom</label>
                                            <input class="form-control" type="text" name="last_name" id="last_name"
                                                   required>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Prénom</label>
                                    <input class="form-control" type="email" name="email" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="body">Message</label>
                                    <textarea class="form-control" type="text" name="body" id="body" rows="8"
                                              required></textarea>
                                </div>

                                <button type="submit" class="btn btn-outline-primary">Envoyer</button>

                            </form>

                        </div>
                    </div>

                    <div class=".col-md-6 .offset-md-3">
                        <div class="content-wrapper">

                            <h1>Contactez-nous pour plus d'infos</h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt dolorem ducimus
                                eos, esse illum libero maxime nulla odit perspiciatis quam qui repellat tenetur totam,
                                veniam voluptas voluptatum. Accusamus consequuntur esse, eum facilis inventore laborum
                                obcaecati quos sit? Dolor dolore doloremque, enim excepturi facere iure laboriosam
                                laborum molestias necessitatibus odio quas qui quibusdam rerum sequi soluta sunt totam
                                ullam, vel veritatis voluptate? Ab at deleniti enim molestias nobis praesentium, quam
                                quas quisquam repudiandae rerum saepe.</p>

                            <img src="https://placehold.it/1000x400?text=Bonjour les gens" alt="">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt dolorem ducimus
                                eos, esse illum libero maxime nulla odit perspiciatis quam qui repellat tenetur totam,
                                veniam voluptas voluptatum. Accusamus consequuntur esse, eum facilis inventore laborum
                                obcaecati quos sit? Dolor dolore doloremque, enim excepturi facere iure laboriosam
                                laborum molestias necessitatibus odio quas qui quibusdam rerum sequi soluta sunt totam
                                ullam, vel veritatis voluptate? Ab at deleniti enim molestias nobis praesentium, quam
                                quas quisquam repudiandae rerum saepe.</p>

                            <h2>Mon super sous titre</h2>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Col 1</th>
                                        <th>Col 2</th>
                                        <th>Col 3</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 1</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 2</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 3</td>
                                    </tr>
                                    <tr>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 1</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 2</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 3</td>
                                    </tr>
                                    <tr>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 1</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 2</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 3</td>
                                    </tr>
                                    <tr>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 1</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 2</td>
                                        <td>qksdh qkjshdkjqhsdkjqhsdjkh qskjdh qs 3</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td>Cell 3</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

<?php require_once 'template-parts/footer.php'; ?>