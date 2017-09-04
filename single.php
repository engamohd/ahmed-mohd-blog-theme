<?php get_header(); ?>

  <div class="container">


    <div class="row my-4 text-center">
      <div class="col-12">
        <h1 class="blog-title">
<a href=<?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>><?php echo (get_bloginfo( 'name' )); ?> </a>
</h1>
        <h3 class="text-muted blog-tag"><?php the_title(); ?></h3>

      </div>
    </div>


    <div class="row my-4">

      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content-single', get_post_format(  ) ); ?>

            <?php endwhile; ?>
              <?php else: ?>
                <h5>No posts yet.</h5>
                <?php  endif; ?>
    </div>

    <div class="row my-4">
    <div class="col-12">

   <?php if ( comments_open() || get_comments_number() ) : ?>
	<?php comments_template(  ); ?>
<?php endif; ?> 
</div>
</div>


    <div class="row my-6 justify-content-center">
      <ul class="nav pager">
        <li class="nav-item">
          <?php previous_post_link( ); ?>
        </li>
        <li class="nav-item">
          <?php next_post_link( ); ?>
        </li>
      </ul>
    </div>


  </div>
  <?php get_footer( ); ?>