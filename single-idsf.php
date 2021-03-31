<?php

get_header() ?>



<div class="container">

    <div class="row flex-row-reverse">

         <?php
        get_template_part("includes/part", "accesRap");
        ?>
    </div>
        
</div>

<?php
get_template_part("includes/part", "featured");
?>


<?php get_footer() ?>