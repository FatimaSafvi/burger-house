<?php
    get_header();
?>

<div class="container">
    <section class="fullwidth">
        <h1>Reviews</h1>
    </section>
</div>


<?php
    while(have_posts()){
        the_post();
    }
?>

<p>
    <?php 
        wp_get_archive('type' = 'daily', 'limit'= '5', 'show_post_count' = 'true');
    ?>
</p>

<?php

    get_footer();
?>