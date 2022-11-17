<?php
/**
 * A Simple Category Template
 */

get_header();
?>

<article class="page_single">

    <header class="main_hero_pages d-flex flex-column " style="background: url('<?= the_post_thumbnail_url(get_the_ID()); ?>') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
        <?php require 'main-navigation-w.php'; ?>

        <div class="container my-3 py-5 d-flex flex-column justify-content-center flex-fill">

            <h1>
                <span class="d-none"><?php the_title()?></span>
                Faça parte do <span style="display: inline-block">nosso time!</span>
            </h1>

        </div>
    </header>

    <div class="container py-5">
        <span class="d-block title mb-5">
            <?php the_title()?>
        </span>

        <div class="row">
            <div class="col-12">
                <?php
                // Incluir Resumo da Página
                the_excerpt();

                ?>

            </div>
        </div>

        <div class="row mt-5 categoria_oportunidades">
            <div class="col col-sm-6  mb-5">
                <div class="content">
                    <div class="bg"></div>
                    <div class="d-flex  align-items-center justify-content-between">
                        <h3>Iniciação Científica</h3>
                        <a href="<?= site_url(); ?>/oportunidades/iniciacao-cientifica" class="d-flex  align-items-center"  title="Ver oportunidades de Iniciação Científica">
                            <img style="width:16px;" src="<?= get_template_directory_uri()."/assets/images/icons/plus.png"; ?>" alt="Ver oportunidades de Iniciação Científica" title="Ver oportunidades de Iniciação Científica" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6  mb-5">
                <div class="content">
                    <div class="bg"></div>
                    <div class="d-flex  align-items-center justify-content-between">
                        <h3>Mestrado</h3>
                        <a href="<?= site_url(); ?>/oportunidades/mestrado" class="d-flex  align-items-center"  title="Ver oportunidades de Mestrado">
                            <img style="width:16px;" src="<?= get_template_directory_uri()."/assets/images/icons/plus.png"; ?>" alt="Ver oportunidades de Mestrado" title="Ver oportunidades de Mestrado" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col col-sm-6 mb-5">
                <div class="content">
                    <div class="bg"></div>
                    <div class="d-flex  align-items-center justify-content-between">
                        <h3>Doutorado</h3>
                        <a href="<?= site_url(); ?>/oportunidades/doutorado" class="d-flex  align-items-center"  title="Ver oportunidades de Doutorado">
                            <img style="width:16px;" src="<?= get_template_directory_uri()."/assets/images/icons/plus.png"; ?>" alt="Ver oportunidades de Doutorado" title="Ver oportunidades de Doutorado" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6  mb-5">
                <div class="content">
                    <div class="bg"></div>
                    <div class="d-flex  align-items-center justify-content-between">
                        <h3>Pós-Doutorado</h3>
                        <a href="<?= site_url(); ?>/oportunidades/pos-doutorado" class="d-flex  align-items-center" title="Ver oportunidades de Pós-Doutorado">
                            <img style="width:16px;" src="<?= get_template_directory_uri()."/assets/images/icons/plus.png"; ?>" alt="Ver oportunidades de Pós-Doutorado" title="Ver oportunidades de Pós-Doutorado" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</article>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>