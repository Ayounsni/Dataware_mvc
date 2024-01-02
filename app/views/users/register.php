<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="vh-100" style="background-color: #FF906C;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center">
                                <img src="<?php echo URLROOT; ?>/Image/oui-removebg-preview.png" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-4 text-black">

                                    <form method="post" action="<?php echo URLROOT; ?>/users/register">


                                        <h5 class="fw-semibold mb-3 mt-3 pb-3" style="letter-spacing: 1px;">Créer un
                                            compte
                                        </h5>

                                        <div class="form-floating mb-3">
                                            <input type="text" name="prenom" class="form-control" id="floatingInput"
                                                value="<?php echo $data['prenom']; ?>" placeholder="name">
                                            <label class="text-secondary" for="floatingInput">Prénom</label>
                                            <span class="ms-2 text-danger "><?php echo $data['prenom_err']; ?></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="nom" class="form-control" id="floatingInput"
                                                value="<?php echo $data['nom']; ?>" placeholder="last">
                                            <label class="text-secondary" for="floatingInput">Nom</label>
                                            <span class="ms-2 text-danger "><?php echo $data['name_err']; ?></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingInput"
                                                value="<?php echo $data['email']; ?>" placeholder="name@example.com">
                                            <label class="text-secondary" for="floatingInput">Email address</label>
                                            <span class="ms-2 text-danger "><?php echo $data['email_err']; ?></span>
                                        </div>
                                        <div class="form-floating mb-3 ">
                                            <input type="password" name="password" class="form-control"
                                                id="floatingPassword" placeholder="Password">
                                            <label class="text-secondary" for="floatingPassword">Mot de passe</label>
                                            <span class="ms-2 text-danger "><?php echo $data['password_err']; ?></span>
                                        </div>

                                        <div class="pt-1 mb-3 d-flex justify-content-end">
                                            <button class="btn orange text-white btn-lg btn-block" type="submit"
                                                name="submit">Créer un compte</button>
                                        </div>

                                        <p class="mb-3 pb-lg-2" style="color: #000000;">Vous avez déjà un compte ?<a
                                                href="<?php echo URLROOT; ?>/users/login" style="color: #E44332;"> Connectez-vous ici</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>