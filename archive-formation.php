<?php get_header(); ?>

<div class="container">

    <div class="row">

        <div class="col-lg-8 mt-5">

            <?php $formsEtat = get_terms(['taxonomy' => "formationEtat"]);

            $formsFedeHb = get_terms(['taxonomy' => 'formationFedeHb']);

            $formsFedeHbCont = get_terms(['taxonomy' => 'formationContinue']);

            $formsFedeHbMod = get_terms(['taxonomy' => 'formationModulaire']);

            $formsComp = get_terms(['taxonomy' => 'formationComp']); ?>

            <h2 class="mb-3">Formation d'état :</h2>

            <div class="accordion mb-5" id="accordionFormationEtat">

                <?php foreach ($formsEtat as $formEtat) : ?>
                    <?php
                    $my_query_formEtat = new WP_Query(
                        array(
                            'showposts'  => -1,
                            'post_type'  => 'formation',
                            'tax_query'  => array(
                                array(
                                    'taxonomy' => 'formationEtat',
                                    'field'    => 'term_id',
                                    'terms'    => $formEtat->term_id,
                                )
                            ),
                        )
                    ); ?>

                    <?php
                    if ($my_query_formEtat->have_posts()) : ?>




                        <?php while ($my_query_formEtat->have_posts()) : $my_query_formEtat->the_post(); ?>


                            <?php
                            get_template_part("includes/part", "accordionsEtat");
                            ?>

                    <?php endwhile;
                    endif; ?>

                <?php endforeach; ?>
            </div>

            <h2 class="mb-3">Formation Fédérale de Handball :</h2>

            <p>Ces formations peuvent être faites selon deux cursus: </p>
            <h3 class="mb-3">Formation Continue</h3>
            <div class="accordion mb-5" id="accordionFormationFedeCont">
                <?php foreach ($formsFedeHb as $formHb) : ?>
                    <?php foreach ($formsFedeHbCont as $formHbCont) : ?>
                        <?php
                        $my_query_fedeHb_cont = new WP_Query(
                            array(
                                'showposts'  => -1,
                                'post_type'  => 'formation',
                                'tax_query'  => array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'formationFedeHb',
                                        'field'    => 'term_id',
                                        'terms'    => $formHb->term_id,

                                    ),
                                    array(
                                        'taxonomy' => 'formationContinue',
                                        'field'    => 'term_id',
                                        'terms'    => $formHbCont->term_id,
                                    )
                                ),

                            )
                        );
                        ?>

                        <?php if ($my_query_fedeHb_cont->have_posts()) : ?>
                            <?php while ($my_query_fedeHb_cont->have_posts()) : $my_query_fedeHb_cont->the_post(); ?>
                                <?php
                                get_template_part("includes/part", "accordionsFede");
                                ?>

                        <?php endwhile;
                        endif;
                        wp_reset_postdata() ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            </div>

            <div class="accordion mb-5" id="accordionFormationFedeMod">
                <h3 class="mb-3 mt-3">Formation Modulaire</h3>

                <?php foreach ($formsFedeHb as $formHb) : ?>
                    <?php foreach ($formsFedeHbMod as $formFedeHbMod) : ?>

                        <?php 
                        
                        $args1 = array(
                                'showposts'  => -1,
                                'post_type'  => 'formation',
                                'order'      => 'ASC',
                                'tax_query'  => array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'formationFedeHb',
                                        'field'    => 'term_id',
                                        'terms'    => $formHb->term_id,
                                    ),
                                    array(
                                        'taxonomy' => 'formationModulaire',
                                        'field'    => 'term_id',
                                        'terms'    => $formFedeHbMod->term_id,
                                    )
                                ),
                                
                        );

                        $args2 = array(
                            'showposts'  => -1,
                            'post_type'  => 'formation',
                            'order'      => 'ASC',
                            'tax_query'  => array(
                                array(
                                    'taxonomy' => 'formationModulaire',
                                    'field'    => 'term_id',
                                    'terms'    => $formFedeHbMod->term_id,
                                )
                            )
                        );

                        
                        $my_query_fedeHb_modulaire = new WP_Query($args1, $args2); ?>

                        <?php if ($my_query_fedeHb_modulaire->have_posts()) : ?>
                            <?php while ($my_query_fedeHb_modulaire->have_posts()) :
                                $my_query_fedeHb_modulaire->the_post(); ?>
                                <?php
                                get_template_part("includes/part", "accordionsFede");
                                ?>

                        <?php endwhile;
                        endif;
                        wp_reset_postdata() ?>

                    <?php endforeach; ?>
                <?php endforeach; ?>

            </div>


            <h2 class="mb-3">Formations Complémentaires :</h2>

            <div class="accordion mb-5" id="accordionFormationComp">
                <?php foreach ($formsComp as $formComp) : ?>
                    <?php
                    $my_query_formComp = new WP_Query(
                        array(
                            'showposts'  => -1,
                            'post_type'  => 'formation',
                            'order'      => 'ASC',
                            'tax_query'  => array(
                                array(
                                    'taxonomy' => 'formationComp',
                                    'field'    => 'term_id',
                                    'terms'    => $formComp->term_id,
                                )
                            ),
                        )
                    ); ?>

                    <?php if ($my_query_formComp->have_posts()) : ?>

                        <?php while ($my_query_formComp->have_posts()) : $my_query_formComp->the_post(); ?>
                            <?php
                            get_template_part("includes/part", "accordionsComp");
                            ?>

                    <?php endwhile;
                    endif; ?>
                <?php endforeach; ?>
            </div>

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