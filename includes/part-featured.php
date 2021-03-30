<section id="featured">

    <div class="container">

        <div class="row">

            <div class="ms-5 mt-5 col-lg-12">
                <h2>Actualités</h2>
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