<div class="w-100 d-flex" style="border-radius: 0 0 100px 0; background: rgba(255,255,255,0.95)">

    <div class="container my-4 d-flex flex-column justify-content-center align-items-center">

        <nav class="p-0 w-100 navbar navbar-expand-lg navbar-light justify-content-between align-items-end">
            <a class="navbar-brand" href="#">
                <img
                    alt="<?= get_bloginfo( 'name' ) . " - " . get_the_title() ; ?>"
                    title="<?= get_bloginfo( 'name' ) . " - " . get_the_title() ; ?>"
                    src="<?= get_template_directory_uri(); ?>/assets/images/flymov-w.png" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="ml-auto">

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sobre
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">FLYMOV</a>
                                <a class="dropdown-item" href="#">Quem Somos</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pesquisa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Zero Emissão</a>
                                <a class="dropdown-item" href="#">Sistemas Autonomos</a>
                                <a class="dropdown-item" href="#">Industria 4.0</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('publicacoes'); ?>">Publicações</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('noticias'); ?>">Notícias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('oportunidades'); ?>">Oportunidades</a>
                        </li>

                    </ul>
                </div>

            </div>


        </nav>

    </div>

</div>