<div class="col-12">
  <article class="card pw my-2 p-1">
    <?php if(has_post_thumbnail( )): ?>
      <img class="card-img-top img-fluid mx-auto d-block mt-3 rounded-circle post-thumbnail" src=<?php echo the_post_thumbnail_url( ); ?> alt=
      <?php echo the_post_thumbnail_caption(  ); ?>></img>
        <?php endif; ?>
          <div class="card-body">
            <a href=<?php echo the_permalink( ); ?> ><h4 class="card-title text-center"><?php echo the_title(  ); ?></h4></a>
            <h6 class="card-subtitle my-2 text-muted"><?php the_date( ); ?> :: <?php the_category( '&nbsp::&nbsp'); ?></h6>
            <p class="card-text">
              <?php the_excerpt(); ?>
            </p>
            <a class="card-link" href=<?php echo the_permalink( ); ?>>  Read more</a>
            <?php edit_post_link( 'edit post','','',null,'card-link' ); ?>
          </div>
  </article>
</div>