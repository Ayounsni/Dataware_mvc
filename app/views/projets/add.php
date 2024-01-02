<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="vh-100 orang" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="d-flex justify-content-end px-3 py-1 "><a href="<?php echo URLROOT; ?>/projets"
                                class="text-danger fs-5"><i class="bi bi-x-lg"></i></a></div>
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none px-2 d-md-flex align-items-center">
                                <img src="<?php echo URLROOT; ?>/Image/oui-removebg-preview.png" alt="login form" class="img-fluid" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body text-black">

                                    <form method="post" action="<?php echo URLROOT; ?>/projets/add">


                                        <h5 class="fw-semibold mb-3 mt-3 pb-3" style="letter-spacing: 1px;">Créer un
                                            nouveau projet</h5>

                                        <div class="form-floating mb-3">
                                            <input type="text" name="nomProjet" class="form-control" id="floatingInput"
                                                value="<?php echo $data['nom_projet']; ?>" placeholder="name" >
                                            <label class="text-secondary" for="floatingInput">Nom du projet</label>
                                            <span class="ms-2 text-danger "><?php echo $data['nomProjet_err']; ?></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" name="date" class="form-control" id="floatingInput"
                                                value="<?php echo $data['date_creation']; ?>" placeholder="last" >
                                            <label class="text-secondary" for="floatingInput">Date de création</label>
                                            <span class="ms-2 text-danger "><?php echo $data['dateCreation_err']; ?></span>
                                        </div>
                                       
                                       


                                        <div class="pt-1 mb-3 d-flex mt-2 justify-content-end">
                                            <button class="btn orange text-light btn-lg btn-block" type="submit"
                                                name="submit">Valider</button>
                                        </div>

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