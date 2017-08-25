<footer class="footer">
  <div class="container">
    <div class="row-padding">
    </div>


    <div class="row">
      <div class="col-xs-12">
        <div class="text-center">
          <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
          </nav>
        </div>
      </div>
    </div>

    <div class="row-padding">
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="text-center">
          <h5 class="copyright-footer-text">Copyright <?php echo date('Y'); ?>  <a href = <?php echo ("'".get_bloginfo( 'wpurl' )."'"); ?>>Ahmed Mohamed </a>. YNWA.</h5>
          <h5>contact me on:</h5>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="text-center">
          <nav>
            <ul class="social-footer-links">
              <?php if('' !== get_option( 'twitter'  )): ?>
                <li><a target="_blank" href=<?php echo ( "'http://twitter.com/". get_option( 'twitter' ) . "'" ); ?>>twitter</a> </li>
                <?php endif; ?>
                  <?php if('' !== get_option( 'facebook'  )): ?>
                    <li><a target="_blank" href=<?php echo ( "'http://facebook.com/". get_option( 'facebook' ) . "'" ); ?>>facebook</a> </li>
                    <?php endif; ?>
                      <?php if('' !== get_option( 'email'  )): ?>
                        <li><a target="_blank" href=<?php echo ( "'mailto:". get_option( 'email' ) . "'" ); ?>>email</a> </li>
                        <?php endif; ?>
                          <?php if('' !== get_option( 'github'  )): ?>
                            <li><a target="_blank" href=<?php echo ( "'http://github.com/". get_option( 'github' ) . "'" ); ?>>github</a> </li>
                            <?php endif; ?>

            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="row-padding">
    </div>




  </div>
  <?php wp_footer(); ?>
</footer>
<script>
  $(document).ready(function() {
    $(".post-content img").addClass('img-responsive');
  });
</script>
</body>

</html>