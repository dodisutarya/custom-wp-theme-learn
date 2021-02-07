<?php
if (is_single()) :
?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_content(); ?> </p>
    <?php the_post_thumbnail('big_thumb') ?>

<?php elseif( is_page()):
    if(is_page(18)){
        echo 'ini halaman helloku';
    }
    ?>
    <h3>Halaman <?php the_title(); ?></h3>
    <p><?php the_content(); ?> </p>

<?php else: ?>    
    <h3><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p>
        <?php echo get_the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Lanjut Baca...</a>
    </p>

    <p class="info_meta">
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
        </a>
        <?php
            echo ' || ';
            the_date('F j, Y'); ?> at <?php the_time('g:i a');
            echo ' || Kategori: ';
            the_category(', ');
        ?>
    </p>
    <?php the_post_thumbnail('small_thumb') ?>

<?php endif; ?>