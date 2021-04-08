<?php

get_header() ?>



<div class="container">

    <div class="row flex-row-reverse">

        <?php
        get_template_part("includes/part", "accesRap");
        ?>

        <?php $formsEtat = get_terms(['taxonomy' => 'formationEtat']);

        ?>


        <div class="col-lg-8 mt-5">



            <?php foreach ($formsEtat as $formEtat) :  ?>

                <?php

                $my_query = new WP_Query(
                    array(
                        'showposts'  => -1,
                        'post_type'  => 'idsf',
                        'tax_query'  => array(
                            array(
                                'taxonomy' => 'sites/lieux',
                                'field'    => 'term_id',
                                'terms'    => $formEtat->term_id,
                            )
                        ),
                    )
                );?>

                <?php if ($my_query->have_posts()) :?>

                    <h2><?= $formEtat->name ?></h2>

                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        

                        <div class="m-5 col-lg-3">

                            <div class="card">
                                <img src="<?= get_the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>

            <?php wp_reset_postdata();
            endforeach; ?>
        </div>
    </div>
</div>

<?php
get_template_part("includes/part", "featured");
?>


<?php get_footer() ?>