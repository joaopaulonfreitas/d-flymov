<?php
/**
 * A Simple Category Template
 */

get_header();
?>

<article class="page_single">

    <header class="main_hero_pages d-flex flex-column justify-content-between" style="background: url('<?= the_post_thumbnail_url(get_the_ID()); ?>') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
        <?php require 'main-navigation-w.php'; ?>

        <div class="container my-3 py-5 d-flex flex-column justify-content-center ">

            <h1 class="text-white d-none">
                <?php the_title()?>
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

                // Include post content
                the_content();
                ?>

            </div>

            <div class="col-12 my-5">
                <a class="btn_outline" href="" title="Saiba Mais">
                    Saiba Mais
                </a>
            </div>


        </div>

    </div>

</article>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>