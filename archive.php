<?php get_header(); ?>
  <div class="container" id="content-area">
    <div class="row">
      <div class="col-xs-12">
        <div class="grav-thumb-wrapper">
          <?php if(''!== get_option( 'gravatar' )): ?>
            <img class="img-circle" src=<?php echo ( "'http://gravatar.com/avatar/" . md5( strtolower( trim( get_option( 'gravatar') ) ) ) . "'"); ?>/>
            <?php endif; ?>
        </div>


        <h1 class="blog-title"> <a href=<?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>><?php echo (get_bloginfo( 'name' )); ?> </a> :: <span class="h3">
<?php the_archive_title(  ); ?></span></h1>
      </div>
    </div>
    <div class="row-padding"></div>
    <div class="row">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format()); ?>
            <?php endwhile; ?>
              <?php else: ?>
                <h5>No posts yet.</h5>
                <?php  endif; ?>
                  <nav>
                    <ul class="pager">
                      <li>
                        <?php previous_posts_link( 'Previous' ); ?>
                      </li>
                      <li>
                        <?php next_posts_link( 'Next' ); ?>
                      </li>
                    </ul>
                  </nav>
    </div>
  </div>
  <?php get_footer( ); ?>