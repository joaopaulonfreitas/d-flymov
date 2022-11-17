<?php
/**
 * A Simple Category Template
 */

get_header();
$term = get_queried_object();
?>

<article class="page_single">

    <header class="main_hero_pages h-auto d-flex flex-column justify-content-between"
            style="min-height: auto; background: url('<?= the_post_thumbnail_url(get_the_ID()); ?>') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
        <?php require 'main-navigation-w.php'; ?>

        <div class="container my-3 py-5 d-flex flex-column justify-content-center ">

            <h1 class="text-white d-none">
                <?php the_title(); ?>
            </h1>

        </div>
    </header>

    <div class="container py-5">
        <span class="d-block title mb-5">
            Oportunidades
        </span>

        <div class="row mb-5">
            <div class="col-12">

                <div class="nav_oportunidades_tabs py-3">

                    <a href="<?= site_url("{$term->taxonomy}/iniciacao-cientifica"); ?>" title="Iniciação Científica" class=" mr-5 <?= ($term->slug == 'iniciacao-cientifica' ? 'active' : '') ?>">
                        Iniciação Científica
                    </a>
                    <a href="<?= site_url("{$term->taxonomy}/mestrado"); ?>" title="Mestrado" class=" mr-5 <?= ($term->slug == 'mestrado' ? 'active' : '') ?>">
                        Mestrado
                    </a>
                    <a href="<?= site_url("{$term->taxonomy}/doutorado"); ?>" title="Doutorado" class=" mr-5 <?= ($term->slug == 'doutorado' ? 'active' : '') ?>">
                        Doutorado
                    </a>
                    <a href="<?= site_url("{$term->taxonomy}/pos-doutorado"); ?>" title="Pós-Doutorado" class="<?= ($term->slug == 'pos-doutorado' ? 'active' : '') ?>">
                        Pós-Doutorado
                    </a>
                </div>

            </div>
        </div>


        <div class="row">

            <div class="col-12 col-md-2 sidebar_nav pb-5">

                <?php
                the_post_navigation(
                    array(
                        'prev_text' => '',
                        'next_text' => '
                        <div class="page_single_next">
                            <span>
                                <span class="mr-2"><img alt="" title="" src="'. get_template_directory_uri().'/assets/images/icons/back.png"/> </span>
                                <span>'. get_the_date('d/m/Y'). '</span>
                            </span>
                        </div>'
                    )
                );

                ?>
            </div>

            <div class="col-12 col-md-10">
                <div class="article-text">
                    <?php
                    // Include post content
                    the_content();
                    ?>
                </div>

                <div>
                    <?php
                    // Previous/next post navigation.
                    //                the_post_navigation(
                    //                    array(
                    //                        'next_text' => '<span class="nav-label">' . esc_html__( 'Next article', 'domain_name' ) . '</span><p class="next-post-title">%title</p>',
                    //                        'prev_text' => '<span class="nav-label">' . esc_html__( 'Previous article', 'domain_name' ) . '</span><p class="previous-post-title">%title</p>'
                    //                    )
                    //                );

                    the_post_navigation(
                        array(
                            'prev_text' => '
                                <div class="page_single_next">
                                    <span>
                                        <span class="mr-2"><img alt="" title="" src="'. get_template_directory_uri().'/assets/images/icons/back.png"/> </span>
                                    </span>
                                </div>',
                            'next_text' => '
                                <div class="page_single_next">
                                    <span>
                                        <span class="mr-2"><img alt="" title="" src="'. get_template_directory_uri().'/assets/images/icons/next.png"/> </span>
                                    </span>
                                </div>',
                        )
                    );
                    ?>
                </div>

            </div>


        </div>

    </div>

</article>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>