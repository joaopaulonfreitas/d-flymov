<?php
    /**
     * A Simple Category Template
     */

    get_header();
?>

    <header class="main_hero_pages d-flex flex-column justify-content-between" style="background: url('<?= get_template_directory_uri(); ?>/assets/images/cover-noticia.png') no-repeat; background-size: cover; background-position: bottom;">

        <!-- Main Navigation-->
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

            <h1 class="text-white">
                <?php single_cat_title('' , true ); ?>
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