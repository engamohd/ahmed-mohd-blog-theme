<div class="col-12">
  <article class="card pw my-2 p-1">
    <?php if(has_post_thumbnail( )): ?>
      <img class="card-img-top img-fluid mx-auto d-block mt-3 rounded-circle post-thumbnail" src=<?php echo the_post_thumbnail_url( ); ?> alt=
      <?php echo the_post_thumbnail_caption(  ); ?>></img>
        <?php endif; ?>
          <div class="card-body">
            <a href=<?php echo the_permalink( ); ?> ><h4 class="card-title text-center"><?php echo the_title(  ); ?></h4></a>
            <h6 class="card-subtitle post-card-tag my-2 text-muted"><?php the_date( ); ?> <?php echo( '&nbsp::&nbsp'); ?> <?php the_category( '&nbsp::&nbsp'); ?><?php echo( '&nbsp::&nbsp'); ?></h6>
            <h6 class="card-subtitle post-card-tag my-2 text-muted"><?php printf( _nx( 'One comment', '%1$s comments', get_comments_number(), ''),number_format_i18n( get_comments_number() ) ); ?></h6>
 


            <p class="card-text">
              <?php the_excerpt(); ?>
            </p>
            <a class="card-link read-more" href=<?php echo the_permalink( ); ?>>  Read more</a>
            <?php edit_post_link( 'edit post','','',null,'card-link edit-post' ); ?>
          </div>
  </article>
</div>