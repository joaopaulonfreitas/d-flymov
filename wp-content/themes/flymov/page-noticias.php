<?php
    /**
     * A Simple Category Template
     */

    get_header();
?>

    <header class="main_hero_pages d-flex flex-column justify-content-between" style="background: url('<?= the_post_thumbnail_url(get_the_ID()); ?>') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
        <?php require 'main-navigation-w.php'; ?>

        <div class="container my-3 py-5 d-flex flex-column justify-content-center ">

            <h1 class="text-white">
                Notícias
            </h1>

        </div>
    </header>


<!--    //Default WordPress-->
<!--    the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)-->
<!--    the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)-->
<!--    the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)-->
<!--    the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)-->
<!--    the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)-->
<!---->
<!--    //With WooCommerce-->
<!--    the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)-->
<!--    the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)-->
<!--    the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)-->

    <section class="page_category py-5">
        <div class="container" role="main">

            <?php
                $category_primary  = get_cat_ID('Últimas Notícias');
                $args = array('cat' => $category_primary, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 3,'post_status' => 'publish');
                query_posts($args);
            ?>

            <div class="row">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article class="page_article col col-sm-4">

                    <?php the_post_thumbnail( [370, 242] ); ?>

                    <div class="content">
                        <h2>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p class="category_name">
                            <?php
                            $category = get_the_category(); // the_category();
                            echo $category[0]->name;
                            ?>
                        </p>

                        <div>
                            <a class="readmore" href="<?php the_permalink() ?>" title="Read More <?php the_title_attribute(); ?>">
                                Read More >
                            </a>
                        </div>

                    </div>

                </article>

            <?php endwhile; ?>
            <?php else: ?>
            <?php _e('No Posts Sorry.'); ?>
            <?php endif; ?>

            </div>

            <?php wp_reset_query();?>

            <div class="row mt-5">

            <!-- Novidades -->

                <?php
                $category_2  = get_cat_ID('Novidades');

                $args = array('cat' => $category_2, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 1,'post_status' => 'publish');
                query_posts($args);
                ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="page_article col col-sm-4">

                            <?php the_post_thumbnail( [370, 242] ); ?>

                            <div class="content">
                                <h2>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <p class="category_name">
                                    <?php
                                    $category = get_the_category(); // the_category();
                                    echo $category[0]->name;
                                    ?>
                                </p>

                                <div>
                                    <a class="readmore" href="<?php the_permalink() ?>" title="Read More <?php the_title_attribute(); ?>">
                                        Read More >
                                    </a>
                                </div>

                            </div>

                        </article>

                    <?php endwhile; ?>
                <?php else: ?>
                    <?php _e('No Posts Sorry.'); ?>
                <?php endif; ?>


                <?php wp_reset_query(); ?>

            <!-- Agenda -->

            <?php
            $category_3  = get_cat_ID('Agenda');
            $args = array('cat' => $category_3, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 1,'post_status' => 'publish');
            query_posts($args);
            ?>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="page_article col col-sm-4">

                            <?php the_post_thumbnail( [370, 242] ); ?>

                            <div class="content">
                                <h2>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <p class="category_name">
                                    <?php
                                    $category = get_the_category(); // the_category();
                                    echo $category[0]->name;
                                    ?>
                                </p>

                                <div>
                                    <a class="readmore" href="<?php the_permalink() ?>" title="Read More <?php the_title_attribute(); ?>">
                                        Read More >
                                    </a>
                                </div>

                            </div>

                        </article>

                    <?php endwhile; ?>
                <?php else: ?>
                    <?php _e('No Posts Sorry.'); ?>
                <?php endif; ?>

            <?php wp_reset_query(); ?>

            <!-- Institucional -->

            <?php
            $category_4  = get_cat_ID('Institucional');
            $args = array('cat' => $category_4, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 1,'post_status' => 'publish');
            query_posts($args);
            ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="page_article col col-sm-4">

                            <?php the_post_thumbnail( [370, 242] ); ?>

                            <div class="content">
                                <h2>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <p class="category_name">
                                    <?php
                                    $category = get_the_category(); // the_category();
                                    echo $category[0]->name;
                                    ?>
                                </p>

                                <div>
                                    <a class="readmore" href="<?php the_permalink() ?>" title="Read More <?php the_title_attribute(); ?>">
                                        Read More >
                                    </a>
                                </div>

                            </div>

                        </article>

                    <?php endwhile; ?>
                <?php else: ?>
                    <?php _e('No Posts Sorry.'); ?>
                <?php endif; ?>

            <?php wp_reset_query(); ?>

        </div>

        </div>
    </section>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>