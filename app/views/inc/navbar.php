<nav class="navbar navbar-expand-lg navbar-scroll  shadow-0 border-bottom ">
            <div class="container">
                <img src="<?php echo URLROOT; ?>/image/Screenshot 2023-12-25 150655.png" alt="logo" class="rounded-4 p-2" style="width: 130px; height: 60px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class=" text-light bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto d-flex gap-5">
                        <li class="nav-item">
                            <a class="nav-link text-center text-white fs-5 fw-lighter" href="DashboardUser.php">Mes projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-white fs-5 fw-lighter" href="MesProjets.php">All taches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center text-white fs-5 fw-lighter" href="MesProjets.php">Statistique</a>
                        </li>

                        <a href="<?php echo URLROOT; ?>/users/logout"
                            class="btn bg-white p-2 rounded-3 orange1 text-decoration-none "><i
                                class="bi bi-box-arrow-left"></i> Deconnexion</a>
                    </ul>
                </div>
            </div>
        </nav>