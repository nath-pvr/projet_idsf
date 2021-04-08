<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/assets/JS/app.js" defer></script>
    <?php wp_head() ?>
</head>

<body>

    <!-- <?php if (is_front_page()) : ?> -->



        <section id="carousel">

            <div class="container">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $images = get_posts(
                            array(
                                'post_type'         => 'attachment',
                                'post_mime_type'    => 'image',
                                'post_status'       => 'inherit',
                                'posts_per_page'    => -1,
                            )
                            
                        );
                        // var_dump($images);

                        $num_of_images = count($images);
                        $random_index = rand(0, $num_of_images);
                        $rand_images_id = $images[$random_index];
                        $image = get_post($rand_images_id);

                        // var_dump($image);

                        $my_query = new WP_Query($image);
                        // var_dump($my_query);
                         ?>
                        <?php if ($my_query->have_posts()) : ?>
                            <div class="carousel-item active">
                                <div><?= the_content('carousel-header') ?></div>
                            </div>

                            <?php while ($my_query->have_posts()) :
                                $my_query->the_post();

                            ?>
                            <div class="carousel-item">
                                <div><?= var_dump(the_content('carousel-header')) ?></div>
                            </div>

                        <?php endwhile;
                        endif;
                        wp_reset_postdata() ?>
                    </div>
                </div>
            </div>
        </section>


    <!-- <?php endif ?> -->


    <nav class="navbar navbar-expand-lg bg-nav ">
        <div class="container-fluid d-flex align-items-end">
            <a class="navbar-brand ms-5" href="<?= get_home_url() ?>"><img width="200px" src="<?php bloginfo('template_url'); ?>/assets/img/IDSF_TxtW.png" alt=""></a>


            <div class="collapse navbar-collapse justify-content-end row" id="navbarNav">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav justify-content-end',
                ]) ?></div>
        </div>
    </nav>

    <?= get_search_form() ?>