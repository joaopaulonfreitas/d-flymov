<?php
get_header();
?>

    <div class="main_hero" style="background: url('<?= get_template_directory_uri(); ?>/assets/images/banner1.png') no-repeat;">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center">

            <!-- Main Navigation-->

            <nav class="w-100 navbar navbar-expand-lg navbar-dark justify-content-between">
                <a class="navbar-brand d-none" href="#">Navbar</a>

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
                                <a class="nav-link" href="#">Publicações</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Notícias</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Oportunidades</a>
                            </li>

                        </ul>
                    </div>

                </div>


            </nav>



            <!-- Hero Content-->
            <div class="content row justify-content-md-center flex-column">

                <div class="">
                    <img class="brand" alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/branding-flymov.png" />
                </div>

                <div class="text-center">
                    <a class="cta" href="#" title="Saiba Mais">
                        Saiba Mais
                    </a>
                </div>

            </div>


        </div>
    </div>

    <section class="main_linha_pesquisa">
        <div class="container py-5">

            <header class="header">
                <h2>Conheça nossas linhas de pesquisa</h2>
            </header>

            <div class="row">

                <article class="col d-inline-flex">
                    <div class="pr-3 pt-1">
                        <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/linha-pesquisa/icon-adam.png" />
                    </div>
                    <div >
                        <h3>ADAM</h3>
                        <p>Projeto Avançado para Manufatura Aditiva Metálica</p>
                    </div>
                </article>

                <article class="col d-inline-flex">
                    <div class="pr-3 pt-1">
                        <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/linha-pesquisa/icon-apie.png" />
                    </div>
                    <div>
                        <h3>APIE</h3>
                        <p>Integração Aero-Propulsiva em Aeronaves Elétricas</p>
                    </div>
                </article>

                <article class="col d-inline-flex">
                    <div class="pr-3 pt-1">
                        <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/linha-pesquisa/icon-dmas.png" />
                    </div>
                    <div>
                        <h3>DMAS</h3>
                        <p>Métodos de Tomada  de Decisão para  Sistemas Autonômos</p>
                    </div>
                </article>

                <article class="col d-inline-flex">
                    <div class="pr-3 pt-1">
                        <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/linha-pesquisa/icon-iafa.png" />
                    </div>
                    <div>
                        <h3>IAFA</h3>
                        <p>Montagem Final Inteligente de Aeronaves</p>
                    </div>
                </article>

                <article class="col d-inline-flex">
                    <div class="pr-3 pt-1">
                        <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/linha-pesquisa/icon-mcep.png" />
                    </div>
                    <div>
                        <h3>MCEP</h3>
                        <p>Controle de Máquinas Elétricas para Sistemas Propulsivos Elétricos</p>
                    </div>
                </article>

            </div>

        </div><!-- /.container -->
    </section>

<?php
get_footer();
?>