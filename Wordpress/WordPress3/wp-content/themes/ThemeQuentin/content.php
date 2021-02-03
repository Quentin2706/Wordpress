
<div class="blog-post">
    <div class="fois0-25"></div>
    <div class="colonne pad1em">
    <h2 class="blog-post-title">
        <?php the_title(); ?>
    </h2>
    <?php if (is_single())
    {
        the_content();
     } else {
        echo '<div>';
        the_post_thumbnail(array(200,200));
        echo '<div class="algnitems">';
        the_excerpt();
        echo '</div>';
        echo '</div>';
        ?>
        <a href="<?php the_permalink();?>"><button>Lire la suite ... </button></a>
        <?php
    }
    ?>

    <?php if (is_home() && !is_front_page())
        {?>
            <p class="blog-post-meta"><?php the_date(); ?> par <?php the_author(); ?></p><?php
        }?>
    </div>
</div><!-- /.blog-post -->