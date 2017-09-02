<div class="col-12">
  <article class="card pw post-body my-4">
    <?php if(has_post_thumbnail( )): ?>
      <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle post-thumbnail" src=<?php echo the_post_thumbnail_url( ); ?> alt=
      <?php echo the_post_thumbnail_caption(  ); ?>></img>
        <?php endif; ?>
          <div class="card-body">
            <h4 class="card-title text-center"><?php the_title(  ); ?></h4>
            <h6 class="card-subtitle my-2 text-center text-muted"><?php the_date( ); ?> :: <?php the_category( '&nbsp::&nbsp'); ?></h6>
            <p class="card-text">
              <?php the_content(); ?>
            </p>
          </div>
  </article>
</div>