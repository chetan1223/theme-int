<?php
    function custom(){
      wp_enqueue_style('my-custom_theme', 
      get_template_directory_uri() . '/assets/css/style.css');
    }
    add_action('wp_enqueue_scripts' , 'custom');
    function addMenu(){
      register_nav_menus(array(
        'header' => 'header menu',
        'footer' => 'footer menu'
      ) );
    }
    add_action('init' ,'addMenu');

    function arphabet_widgets_init() {

      register_sidebar( array(
          'name' => 'My custom widget',
          'id' => 'home_right_1',
          'before_widget' => '<div>',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="rounded">',
          'after_title' => '</h2>',
      ) );
  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );

  function My_custom_widget() {

    register_sidebar( array(
        'name' => 'My custom widget2',
        'id' => 'home_right_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'My_custom_widget' );


// Creating the widget 
class wpb_widget extends WP_Widget {
  
  function __construct() {
  parent::__construct(
    
  // Base ID of your widget
  'wpb_widget', 
    
  // Widget name will appear in UI
  __('WPBeginner Widget', 'wpb_widget_domain'), 
    
  // Widget description
  array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
  );
  }
    
  // Creating widget front-end
    
  public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance['title'] );
    
  // before and after widget arguments are defined by themes
  echo $args['before_widget'];
  if ( ! empty( $title ) )
  echo $args['before_title'] . $title . $args['after_title'];
    
  // This is where you run the code and display the output
  echo __( 'Hello, World!', 'wpb_widget_domain' );
  echo $args['after_widget'];
  }
            
  
   // Widget Backend 
   public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'title', 'wpb_widget_domain' );
    }
    // description
    if ( isset( $instance[ 'description' ] ) ) {
      $description = $instance[ 'description' ];
      }
      else {
      $description = __( 'New description', 'wpb_widget_domain' );
      }
    // Widget admin form
    ?>
   
      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'title:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>

      <p>
      <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'description:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>" />
      </p>
      <p>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'image:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_attr(  ); ?>" />
      </p>
      <?php 
  }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
    $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    // function wpb_load_widget() {
    //     register_widget( 'wpb_widget' );
    // }
    // add_action( 'widgets_init', 'wpb_load_widget' );
  // <ul>
  //   $yt = get_posts( );
  //   foreach ( $yt as $post ) {
  //   the_content();
  //   wp_get_single_post('id=121');
  //   }
  // </ul>
?>