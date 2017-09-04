<?php get_header(); ?>

  <div class="container">


    <div class="row my-4 text-center">

      <div class="col-12">
        <h1 class="blog-title">
<a href=<?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>><?php echo (get_bloginfo( 'name' )); ?> </a>
</h1>
        <h3 class="text-muted blog-tag"><?php echo the_archive_title( ); ?></h3>

      </div>
    </div>




    <div class="row my-4">
      <div class="card-columns">
        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format(  ) ); ?>

              <?php endwhile; ?>
                <?php else: ?>
                  <h5>No posts yet.</h5>
                  <?php  endif; ?>
      </div>
    </div>


    <div class="row my-5 justify-content-center bb-2">
      <ul class="nav pager">
        <?php if(get_previous_posts_link( )!==null): ?>
          <li class="mx-3">
            <?php previous_posts_link( '<<' ); ?>
          </li>
          <?php endif; ?>
            <?php if(get_next_posts_link( )!==null): ?>

              <li class="mx-3">
                <?php next_posts_link( '>>' ); ?>
              </li>
              <?php endif; ?>

      </ul>
    </div>

  </div>
  <?php get_footer( ); ?>