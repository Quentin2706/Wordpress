<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset colonne">
        <h4>À Propos</h4>
        <p><?php the_author_meta( 'description' ); ?> </p>
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    </div>
    <div class="foisDemi"></div>
</div><!-- /.blog-sidebar -->