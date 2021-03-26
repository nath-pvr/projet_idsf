<?php

/**
 * Template Name: Accueil
 */
get_header() ?>

<div class="row flex-row-reverse">

    <div class="col-lg-4">
        <h2>Partenaires</h2>

        <ul>
        <li></li>
        </ul>
    </div>

    <div class="col-lg-8">

        <h2>Actualités</h2>

        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title"><?= the_title(); ?></h5>
                        <p class="card-text"><?= the_content(); ?></p>
                        <a href="<?= the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>

</div>


<?php get_footer() ?>