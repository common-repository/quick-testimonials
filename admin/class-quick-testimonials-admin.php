<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://themeregion.com
 * @since      1.0.0
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/admin
 */


/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/admin
 * @author     ThemeRegion <support@themeregion.com>
 */
class Quick_Testimonials_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// Define Constants
		$this->quick_testimonials_define_constants();

		// Load admin settings
		$this->quick_testimonials_load_admin_settings();

		// Initialize plugin filters
		$this->quick_testimonials_init_filters();

		// Initialize plugin actions
		$this->quick_testimonials_init_actions();
	}

	/**
	 * Init all the actions of admin pages
	 */
	public function quick_testimonials_init_actions() {
		add_action( 'add_meta_boxes', array( $this, 'quick_testimonials_add_generator_meta_box' ) );
		add_action( 'manage_tr_testimonial_posts_custom_column', array( $this, 'quick_testimonials_add_shortcode_form' ), 10, 2 );
		add_action( 'activated_plugin', array( $this, 'quick_testimonials_redirect_help_page' ));
		add_action( 'admin_menu', array( $this, 'quick_testimonials_admin_sub_menu' ));
	}

	/**
	 * Init all the actions of admin pages
	 */
	public function quick_testimonials_init_filters() {
		add_filter( 'plugin_action_links', array( $this, 'quick_testimonials_add_plugin_action_links' ), 10, 2 );
		// Add shortcode field in testimonial admin table column
        add_filter( 'manage_tr_testimonial_posts_columns', array( $this, 'quick_testimonials_add_shortcode_column' ) );
	}

	/**
	 * Define constant if not already set
	 *
	 * @since 1.0.2
	 *
	 * @param  string $name
	 * @param  string|bool $value
	 */
	public function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}


	/**
	 * Define plugin constants
	 */
	public function quick_testimonials_define_constants() {
		$this->define( 'QT_FREE_VERSION', $this->version );
		$this->define( 'QT_FREE_PATH', plugin_dir_path( __FILE__ ) );
		$this->define( 'QT_FREE_URL', plugin_dir_url( __FILE__ ) );
		$this->define( 'QT_FREE_BASENAME', plugin_basename( __FILE__ ) );
		
		$this->define( 'QT_ADMIN_PARTIALS', dirname( __FILE__ ) . '/partials/' );
		$this->define( 'QT_ADMIN_IMG', plugin_dir_url( __FILE__ ) . '/img/' );
	}

	/**
	 * This method will load cpt & metabox options for the plugin
	 * @since 1.0.0
	 */
	 public function quick_testimonials_load_admin_settings() {

		require_once QT_ADMIN_PARTIALS . 'qt-cpt.php';
        require_once QT_ADMIN_PARTIALS . 'codestar-framework/codestar-framework.php';
		require_once QT_ADMIN_PARTIALS . 'qt-metabox.php';
	 }

	/**
	 * Redirect after active
	 * @param $plugin
	 */
	public function quick_testimonials_redirect_help_page( $plugin ) {
		if ( $plugin == 'quick-testimonials/quick-testimonials.php' ) {
			exit( wp_redirect( admin_url( 'edit.php?post_type=tr_testimonial&page=qt_help' ) ) );
		}
	}

	public function quick_testimonials_admin_sub_menu() {

		add_submenu_page(
			'edit.php?post_type=tr_testimonial',
			__( 'Testimonial Help', 'quick-testimonials' ),
			__( 'Help', 'quick-testimonials' ),
			'manage_options',
			'qt_help',
			array( $this, 'help_page_callback' )
		);
	}

	public function help_page_callback() {
		require_once QT_ADMIN_PARTIALS . 'quick-testimonials-admin-submenu-display.php';
	}

     /**
	 * ShortCode Column
	 * @return array
	 */
	public function quick_testimonials_add_shortcode_column() {
		$new_columns['cb']        = '<input type="checkbox" />';
		$new_columns['title']     = __( 'Slider Title', 'testimonial-free' );
		$new_columns['qt_shortcode'] = __( 'Shortcode', 'quick-testimonials' );
		$new_columns['']          = '';
		$new_columns['date']      = __( 'Date', 'testimonial-free' );

		return $new_columns;
	}

    /**
	 * @param $column
	 * @param $post_id
	 */
	function quick_testimonials_add_shortcode_form( $column, $post_id ) {

		switch ( $column ) {

			case 'qt_shortcode':
				$column_field = '<input style="width: 270px;padding: 6px;" type="text" onClick="this.select();" readonly="readonly" value="[quick_testimonials id=&quot;' . $post_id . '&quot;' . ']"/>';
				echo $column_field;
				break;
			default:
				break;

		} // end switch

	}

	/**
	 * Add plugin action menu
	 */
	public function quick_testimonials_add_plugin_action_links( $links, $file ) {

		if ( $file == 'quick-testimonials/quick-testimonials.php' ) {
			$new_links = array(
				//sprintf( '<a href="%s" style="%s" target="_blank">%s</a>', 'https://plugins.themeregion.com/quick-testimonials/', 'color:red;font-weight:bold', __( 'Go Pro!', 'quick-testimonials' ) ),
				sprintf( '<a href="%s">%s</a>', admin_url( 'edit.php?post_type=tr_testimonial' ), __( 'Testimonials Settings', 'quick-testimonials' ) ),
			);

			return array_merge( $new_links, $links );
		}

		return $links;
	}

     public function quick_testimonials_add_generator_meta_box() {
		add_meta_box( 'qt_sc_gen', __( 'Shortcode Option', 'quick-testimonials' ), array(
			$this,
			'quick_testimonial_shortcode_view'
		), 'tr_testimonial', 'side', 'high'
		);
	}

    public function quick_testimonial_shortcode_view() {
		require_once QT_ADMIN_PARTIALS . 'quick-testimonials-admin-display.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/quick-testimonials-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		global $post_type;

         wp_localize_script( 'jquery', 'get',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'siteurl' => get_template_directory_uri(),
			)
		);
        wp_enqueue_script( 'qt-admin-masonry', plugin_dir_url( __FILE__ ) . 'js/masonry.pkgd.min.js', array( 'jquery' ), $this->version, false );
		//if ( 'tr_testimonial' == $post_type ) :
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/quick-testimonials-admin.js', array( 'jquery' ), $this->version, false );
		//endif;

	}

}
