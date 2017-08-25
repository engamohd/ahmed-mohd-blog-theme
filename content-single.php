<div class="col-xs-12">
  <div class="post-container pr">
    <h1><a class="post-link" href=<?php echo ( "'". get_the_permalink() . "'"); ?>> <?php the_title( ); ?> </a></h1>
    <h6 class="text-muted"> <?php the_date( ); ?>  ::  <span  class="post-cats"> <?php the_category( " :: "); ?> </span> </h6>
    <hr/>
    <div class="post-content">
      <?php if(has_post_thumbnail( )): ?>
        <img class="post-thumbnail center-block img-circle" src=<?php echo ( "'". get_the_post_thumbnail_url() . "'"); ?> />
        <?php endif; ?>
          <?php the_content(); ?>
    </div>
  </div>
</div>