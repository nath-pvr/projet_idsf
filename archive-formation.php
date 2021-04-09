<?php get_header(); ?>

<div class="container">

    <div class="row">

        <div class="col-lg-8 mt-5">

            <?php $formations = get_terms(['taxonomy' => "formations"]);
            var_dump($formations); ?>





            <?php foreach ($formations as $formation) : ?>
                <?php
                $my_query_formation = new WP_Query(
                    array(
                        'showposts'  => -1,
                        'post_type'  => 'formation',
                        'order'      => 'ASC',
                        'tax_query'  => array(
                            array(
                                'taxonomy' => 'formations',
                                'field'    => 'term_id',
                                'terms'    => $formation->term_id,
                            )
                        ),
                    )
                );
                ?>

                <?php
                if ($my_query_formation->have_posts()) : ?>

                    <h2 class="mb-3"><?= $formation->name ?></h2>
                    <div class="accordion mb-5" id="accordionFormation">

                        <?php while ($my_query_formation->have_posts()) : $my_query_formation->the_post(); ?>


                            <?php
                            get_template_part("includes/part", "accordions");
                            ?>

                    <?php endwhile;
                    endif; ?>
                    </div>
                <?php endforeach; ?>         

        </div>

        <?php
        get_template_part("includes/part", "accesRap");
        ?>


    </div>
</div>

<?php
get_template_part("includes/part", "featured");
?>



<?php get_footer(); ?>