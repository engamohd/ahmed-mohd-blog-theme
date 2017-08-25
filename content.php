<div class="col-xs-12">
  <div class="post-container pr">
    <?php if(has_post_thumbnail( )): ?>
      <img class="post-thumbnail center-block img-circle" src=<?php echo ( "'". get_the_post_thumbnail_url() . "'"); ?> />
      <?php endif; ?>
        <h3><a class="post-link" href=<?php echo ( "'". get_the_permalink() . "'"); ?>> <?php the_title( ); ?> </a></h3>
        <h6 class="text-muted"> <?php the_date( ); ?>  ::  <span class="post-cats"> <?php the_category( " :: "); ?> </span> </h6>
        <?php the_excerpt(); ?>
  </div>
</div>