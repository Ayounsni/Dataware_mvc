<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h1 class="text-center display-5 fw-lighter orange1">Mes projets</h1>
                    <div class="container mt-4 mb-3">
                    <?php flash('projet ajoutée'); ?>
                        <a href="<?php echo URLROOT; ?>/projets/add"
                        class="btn orange p-2 rounded-3 text-white mb-4 text-decoration-none "><i class="bi bi-folder-plus"></i> Créer un nouveau projet</a>
                        <div class="row">
                            <?php foreach ($data['projets'] as $projet) : ?>
                        <div class="col-md-4">
                                <div class="card p-3 mb-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <img src="<?php echo URLROOT; ?>/Image/symbole-de-conception-orange.png" alt="icone" class="w-100"> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0"><?php echo $projet->nom; echo ' '; echo  $projet->prenom ;?></h6> <span><?php echo $projet->date_creation ?></span>
                                            </div>
                                        </div>
                                        <div class="badge orange1 fs-5 px-0 d-flex gap-3"> <i class="bi bi-pencil-fill"></i> <i class="bi bi-trash-fill"></i></div>
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="heading"><?php echo $projet->nom_projet ?></h3>
                                        <div class="mt-5">
                                            <div class="mt-3"> <a href="deconnexion.php"
                                                class="btn orange w-100 p-2 rounded-3 text-white  text-decoration-none ">  Gestion Des Taches</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>