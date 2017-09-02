<?php get_header(); ?>

  <div class="container">


    <div class="row my-4 text-center">
      <div class="col-12">
        <h1 class="blog-title">
<a href=<?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>><?php echo (get_bloginfo( 'name' )); ?> </a>
</h1>
        <h3 class="text-muted blog-tag"><a href=<?php echo the_permalink(  ); ?>> <?php the_title(); ?></a></h3>

      </div>
    </div>




    <div class="row my-4">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <div class="col-12">
            <article class="card pw post-body my-4">
              <div class="card-body">
                <h4 class="card-title text-center"><?php the_title(  ); ?></h4>
                <p class="card-text">
                  <?php the_content(); ?>
                </p>
              </div>
            </article>
          </div>
          <?php endwhile; ?>
            <?php else: ?>
              <?php  endif; ?>
    </div>


    <div class="row my-4">
      <ul class="nav pager">
        <li class="nav-item">
          <?php previous_posts_link( 'Previous' ); ?>
        </li>
        <li class="nav-item">
          <?php next_posts_link( 'Next' ); ?>
        </li>
      </ul>
    </div>

  </div>
  <?php get_footer( ); ?>