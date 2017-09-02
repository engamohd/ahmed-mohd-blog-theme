<footer class="footer">
  <div class="container">

    <div class="row my-4">
      <div class="col-12 text-center">
        <?php wp_nav_menu( array( 'theme_location' => 'main' ,'menu_class' => 'nav justify-content-center ' ) ); ?>
      </div>
    </div>


    <div class="row my-4">
      <div class="col-12 text-center">
        <?php get_search_form(  ); ?>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-12 text-center">
        <h5 class="copyright-footer-text">Copyright <?php echo date('Y'); ?>  <a href = <?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>>Ahmed Mohamed </a>. YNWA.</h5>
        <h5>contact me on:</h5>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-12 text-center">
        <ul class="nav justify-content-center ">
          <?php if('' !== get_option( 'twitter'  )): ?>
            <li class="nav-item"><a target="_blank" href=<?php echo ( "'http://twitter.com/". get_option( 'twitter' ) . "'" ); ?>>twitter</a> </li>
            <?php endif; ?>
              <?php if('' !== get_option( 'facebook'  )): ?>
                <li class="nav-item"><a target="_blank" href=<?php echo ( "'http://facebook.com/". get_option( 'facebook' ) . "'" ); ?>>facebook</a> </li>
                <?php endif; ?>
                  <?php if('' !== get_option( 'email'  )): ?>
                    <li class="nav-item"><a target="_blank" href=<?php echo ( "'mailto:". get_option( 'email' ) . "'" ); ?>>email</a> </li>
                    <?php endif; ?>
                      <?php if('' !== get_option( 'github'  )): ?>
                        <li class="nav-item"><a target="_blank" href=<?php echo ( "'http://github.com/". get_option( 'github' ) . "'" ); ?>>github</a> </li>
                        <?php endif; ?>

        </ul>
      </div>
    </div>



  </div>
  <?php wp_footer(); ?>
</footer>
<script>
  $(document).ready(function() {
    $(".post-body img").addClass('img-fluid mx-auto d-block m-2 mt-3');
  });
</script>
</body>

</html>