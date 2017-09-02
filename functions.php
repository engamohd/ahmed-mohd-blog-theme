<?php
function ahmedmohd_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'ahmedmohd-featured-image', 2000, 1200, true );
    add_image_size( 'ahmedmohd-thumbnail-avatar', 100, 100, true );
    
    
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
    'main'    => __( 'Main Menu', 'ahmedmohd' ),
    ) );
    
    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ) );
    
    /*
    * Enable support for Post Formats.
    *
    * See: https://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
    ) );
}
add_action( 'after_setup_theme', 'ahmedmohd_setup' );
function ahmedmohd_excerpt_more( $link ) {
    if ( is_admin() ) {
        return $link;
    }
    
    $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
    esc_url( get_permalink( get_the_ID() ) ),
    sprintf( __( 'Read more...', 'ahmedmohd' ), get_the_title( get_the_ID() ) )
    );
    // return ' &hellip; ' . $link;
    return null;
}
add_filter( 'excerpt_more', 'ahmedmohd_excerpt_more' );
/**
* Enqueue scripts and styles.
*/
function ahmedmohd_scripts() {
    wp_enqueue_style( 'bootstrap_css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" );
    wp_enqueue_style( 'googlefonts', "https://fonts.googleapis.com/css?family=Quicksand|Inconsolata" );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome_css', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" );
    wp_enqueue_style( 'prism_css', get_theme_file_uri( '/assets/prism.css' ) );
    
    wp_enqueue_script( 'jquery_js', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" , array() );
    wp_enqueue_script( 'popper_js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js", array() );
    wp_enqueue_script( 'bootstrap_js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js", array() );
    wp_enqueue_script( 'trianglify_js', "https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js", array() );
    wp_enqueue_script( 'prefixfree', get_theme_file_uri( '/assets/prefixfree.min.js' ), array());
    wp_enqueue_script( 'prism_js', get_theme_file_uri( '/assets/prism.js' ), array());
    
}
add_action( 'wp_enqueue_scripts', 'ahmedmohd_scripts' );


function ahmedmohd_settings_menu(){
    add_menu_page( 'Theme settings', 'Theme settings', 'manage_options', 'theme-settings', 'ahmedmohd_settings_page', null, 99 );
}
add_action('admin_menu','ahmedmohd_settings_menu');


function ahmedmohd_settings_page(){ ?>
  <div class="settings-wrapper">
    <h1>Ahmed Mohamed Theme Settings</h1>
    <form method="post" action="options.php">
      <?php
    settings_fields( 'section' );
    do_settings_sections( 'theme-settings' );
    submit_button();
    ?>
    </form>
  </div>
  <?php }

function ahmedmohd_settings_page_setup(){
    
    add_settings_section( 'section', 'Social Accounts', null, 'theme-settings' );
    
    add_settings_field( 'twitter', 'Twitter Handle', 'setting_twitter', 'theme-settings', 'section' );
    add_settings_field( 'facebook', 'Facebook Handle', 'setting_facebook', 'theme-settings', 'section' );
    add_settings_field( 'gravatar', 'Gravatar Email', 'setting_gravatar', 'theme-settings', 'section' );
    add_settings_field( 'email', 'Email', 'setting_email', 'theme-settings', 'section' );
    add_settings_field( 'github', 'Github Username', 'setting_github', 'theme-settings', 'section' );
    
    register_setting( 'section', 'twitter' );
    register_setting( 'section', 'facebook' );
    register_setting( 'section', 'gravatar' );
    register_setting( 'section', 'email' );
    register_setting( 'section', 'github' );
    
}
add_action('admin_init','ahmedmohd_settings_page_setup');



// Twitter
function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
    <?php
}
// Facebook
function setting_facebook() { ?>
      <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
      <?php
}
// Gravatar
function setting_gravatar() { ?>
        <input type="text" name="gravatar" id="gravatar" value="<?php echo get_option( 'gravatar' ); ?>" />
        <?php
}
// Email
function setting_email() { ?>
          <input type="text" name="email" id="email" value="<?php echo get_option( 'email' ); ?>" />
          <?php
}
// Github
function setting_github() { ?>
            <input type="text" name="github" id="github" value="<?php echo get_option( 'github' ); ?>" />
            <?php
}





?>