<?php

get_header() ?>

<div class="container">

    <div class="row flex-row-reverse">

        <?php
        get_template_part("includes", "accesRap-part");
        ?>

        <div class="col-lg-8">

            <?php

            $args = array(
                'post_type'     => 'idsf',
                'post_per_page' => '4',
                'order'         => 'desc'
            );

            $my_query = new WP_Query($args);
            ?>

            <?php if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();
            ?>

                    <div class="ms-5 mt-5 col-lg-12">
                        <h2><?= $my_query->the_title() ?></h2>
                    </div>

                    <div class="m-5 col-lg-3">

                        <div class="card">
                            <img src="<?= $my_query->get_the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= the_title() ?></h5>
                            </div>
                        </div>
                <?php endwhile;
            endif; ?>
                    </div>

        </div>
    </div>
</div>

<?php
    get_template_part("includes", "featured-part");
?>


<?php get_footer() ?>