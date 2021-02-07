<?php
get_header();
?>

<main>
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();
            get_template_part('content');
        endwhile;
    else :
        echo 'tidak ada post';
    endif;
    ?>
</main>

<aside class="">
    <?php dynamic_sidebar('sidebar1'); ?>
</aside>

<div class="clear"></div>

<?php
get_footer();
?>