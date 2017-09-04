<div class="row my-4">
  <div class="col-12 text-center">

    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

      <input type="search" class="search-field h-100 p-2" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

      <input type="submit" class="btn btn-outline-dark btn-xs search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>

  </div>
</div>