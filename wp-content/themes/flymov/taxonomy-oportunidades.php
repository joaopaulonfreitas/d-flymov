<?php
/**
 * A Simple Category Template
 */

get_header();

$term = get_queried_object();
?>

<article class="page_single">

    <header class="main_hero_pages h-auto d-flex flex-column " style="background: url('<?= the_post_thumbnail_url(get_the_ID()); ?>') no-repeat; background-size: cover; background-position: bottom;
            min-height: auto;">

        <!-- Main Navigation-->
        <?php require 'main-navigation-w.php'; ?>

        <div class="container d-flex flex-column justify-content-center flex-fill">

            <h1>
                <span class="d-none">Oportunidades para <?=  $term->name; ?></span>
            </h1>

        </div>
    </header>

    <?php
    //echo $term->name ."<br>"; // will show the name
    //echo $term->taxonomy ."<br>"; // will show the taxonomy
    //echo $term->slug ."<br>";
    ?>

    <div class="container py-5">
        <span class="d-block title mb-5">
            <?= $term->taxonomy; ?>
        </span>

        <div class="row">
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


        <div class="row mt-5">
            <?php
            $args = array(
                'post_type' => 'oportunidade',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'oportunidades',
                    'field' => 'slug',
                    'terms' => 'iniciacao-cientifica'
                    )
                )
            );
            $category_primary  = get_cat_ID('Últimas Notícias');
            //$args = array('cat' => $category_primary, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 3,'post_status' => 'publish');
            query_posts($args);
            //$products = new WP_Query( $args );
            ?>

            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class=" col col-sm-6 flex-column mb-4">
                            <div class="article_oportunidade_box d-flex flex-column">

                            <div class="px-5">
                                <p class="category pb-2"><?=  $term->name; ?></p>
                            </div>
                            <div class="content flex-fill px-5">

                                <h2 class="title_opotunidade">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <p class="text m-0">
                                    <?php
                                        $duration = get_post_meta( get_the_ID(), 'duration', true );
                                        $expires_in = get_post_meta( get_the_ID(), 'expires_in', true );
                                        $advisor = get_post_meta( get_the_ID(), 'advisor', true );
                                    ?>
                                    <b>Duração: </b> <?= $duration; ?><br>
                                    <b>Orientador: </b> <?= $advisor; ?><br>
                                    <span class="d-flex align-items-center w-100">
                                        <img src="<?= get_template_directory_uri()."/assets/images/icons/clock.png"; ?>" alt="" title="" class="mr-2" />
                                        Expira em:  <?= $expires_in; ?>
                                    </span>
                                </p>

                                <div class="link">
                                    <a href="<?php the_permalink() ?>" title="Read More <?php the_title_attribute(); ?>">
                                        <img src="<?= get_template_directory_uri()."/assets/images/icons/plus.png"; ?>" alt="Mais sobre <?php the_title(); ?>" title="Mais sobre <?php the_title(); ?>" />
                                    </a>
                                </div>

                            </div>

                            </div>
                        </article>

                    <?php endwhile; ?>
                <?php else: ?>
                    <?php _e('No Posts Sorry.'); ?>
                <?php endif; ?>

            <?php wp_reset_query();?>
        </div>

    </div>

</article>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>