<?php get_header(); ?>
  <div class="container" id="content-area">
    <div class="row">
      <div class="col-xs-12">
        <div class="grav-thumb-wrapper">
          <?php if(''!== get_option( 'gravatar' )): ?>
            <img class="img-circle" src=<?php echo ( "'http://gravatar.com/avatar/" . md5( strtolower( trim( get_option( 'gravatar') ) ) ) . "'"); ?>/>
            <?php endif; ?>
        </div>

        <h1 class="blog-title">

<a href=<?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>>

<?php echo get_bloginfo( 'name' ); ?> </a>
<?php echo " :: "; ?>
<a class="post-link" href=<?php echo ( "'". get_the_permalink() . "'"); ?>>

<span class="h3"><?php the_title( ); ?> </span></a>
</h1>
      </div>
    </div>
    <div class="row-padding"></div>
    <div class="row">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-container pr post-content">
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
            <?php endif; ?>
    </div>
  </div>
  <?php get_footer( ); ?>