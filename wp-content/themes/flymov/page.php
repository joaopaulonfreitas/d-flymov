<?php
get_header();
?>

    <header class="main_hero_pages" style="background: url('<?= get_template_directory_uri(); ?>/assets/images/cover-sobre.png') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
        <div class="w-100 d-flex bg-white" style="border-radius: 0 0 100px 0">
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

            </div>

        </div>

        <div class="container my-3 py-5 d-flex flex-column justify-content-center ">

            <h1>
                <span>CENTRO DE PESQUISA EM ENGENHARIA</span>
                MOBILIDADE AÉREA DO FUTURO
            </h1>

        </div>
    </header>

    <article class="pages">

        <div class="container py-5">

            <h3>Flymov</h3>

            <div class="row py-4">

                <div class="col col-sm-6">

                <p>O Desenvolvimento de tecnologias inovadoras e possivelmente
                    disruptivas é vital para o futuro da indústria aeronáutica.
                    Embraer e ITA, celebrando sua parceria de longo tempo, com o
                    apoio da FAPESP apresentam o FLYMOV. Um Centro de Pesquisa
                    em Engenharia (CPE) para estudar e desenvolver soluções pré
                    competitivas para transformar a mobilidade aérea do futuro.</p>

                <p>Elevar o nível de prontidão tecnológica, através de pesquisas básicas
                    e aplicadas de tecnologias emergentes, reduz, de maneira significativa
                    as incertezas e os riscos associados para gerar inovações em processos
                    produtivos, novos produtos e novos serviços.</p>

                <p>O FLYMOV mobiliza mais de 130 pessoas entre pesquisadores, colaboradores
                    da Embraer e bolsistas – Iniciação Científica, Mestrado, Doutorado e
                    Pós-Doutorado – numa ambisiosa iniciativa visando estabelecer um novo
                    marco para a competitividade da indústria nacional e para a formação dos
                    profissionais que transformarão o ecossistema de inovação da mobilidade aérea.</p>
                </div>

                <div class="col col-sm-6">
                    <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/sobre/image-01.png" />
                </div>

            </div>

            <div class="row py-4">

                <div class="col col-sm-6">
                    <img alt="" title="" src="<?= get_template_directory_uri(); ?>/assets/images/sobre/image-02.png" />
                </div>

                <div class="col col-sm-6">

                    <h4>LOCALIZAÇÃO</h4>

                    <p>O nó central da rede de Pesquisa do FLYMOV está localizado no ITA, nossa instituição sede.
                        A rede de pesquisa vai muito além das fronteiras do prédio, é constituída por instituições
                        renomadas como a UNICAMP e a USP/São Carlos, através de seus pesquisadores e infraestrutua
                        de laboratórios.</p>

                    <p>Buscamos a excelência no processo da pesquisa aplicada através do envolvimento de profissionais
                        de reconhecida competência em suas áreas de conhecimento, engajados na parceria entre Academia
                        e Indústria visando transformar a mobilidade aérea.</p>

                </div>

            </div>

        </div>

    </article>

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