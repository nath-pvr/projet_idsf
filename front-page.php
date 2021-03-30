<?php

/**
 * Template Name: Accueil
 */
get_header() ?>

<section id="actu" class="container">
    <div class="row flex-row-reverse ">
        <div class="col-lg-4">
            <div class="ms-5 mt-5 col-lg-12">
                <h2>Partenaires</h2>
            </div>

            <div class="card m-3">
                <div class="card-body mx-auto">
                    <ul>
                        <li><a href="http://liguebfc-handball.fr/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/LogoligueBFC-iconeinternet-300x76.png" alt=""></a></li>
                        <li><a href="https://www.moncompteformation.gouv.fr/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-cpf" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="ms-5 mt-5 col-lg-12">
                <h2>Actualités</h2>
            </div>

            <div class="m-5 col-lg-12">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="card w-75 mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?= the_title(); ?></h5>
                                <p class="card-text"><?= the_content(); ?></p>
                                <a href="<?= the_permalink(); ?>" class="btn btn-gold">Lire la suite</a>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="temoignages">

    <div class="container">
        <div class="row">

            <div class="ms-5 mt-5 col-lg-12">
                <h2>Témoignages</h2>
            </div>

            <div class="col-lg-12 row d-flex mb-5">
                <?php

                $args = array(
                    'post_type'     => 'temoignage',
                    'post_per_page' => '4',
                    'order'         => 'desc'
                );

                $my_query = new WP_Query($args);
                ?>

                <?php if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post();
                    ?>

                        <div class="card mt-3 offset-1 col-lg-5  col-sm-12 ms-auto bg-blue ">
                            <div class="row d-flex align-items-center g-0">
                                <div class="col-lg-4">
                                    <img alt="" src="<?= the_post_thumbnail('card-header') 
                                    ?>">
                                </div>
                                <div class="col-lg-7 offset-1 d-flex flex-column justify-content-center" >
                                    <div class="card-body white my-auto">
                                        <h5 class="card-title"><?= the_title() ?></h5>
                                        <div class="card-text"><?= the_content()?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>


            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>

