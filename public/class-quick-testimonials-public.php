<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://themeregion.com
 * @since      1.0.0
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/public
 */

 defined( 'QT_PUBLIC_PARTIALS' ) or define( 'QT_PUBLIC_PARTIALS', dirname( __FILE__ ) . '/partials/' );
 defined( 'QT_PUBLIC_CSS' ) or define( 'QT_PUBLIC_CSS', plugin_dir_url( __FILE__ ) . '/assets/css/' );
 defined( 'QT_PUBLIC_JS' ) or define( 'QT_PUBLIC_JS', plugin_dir_url( __FILE__ ) . '/assets/js/' );
 defined( 'QT_PUBLIC_IMG' ) or define( 'QT_PUBLIC_IMG', plugin_dir_url( __FILE__ ) . '/assets/img/' );

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Quick_Testimonials
 * @subpackage Quick_Testimonials/public
 * @author     ThemeRegion <support@themeregion.com>
 */
class Quick_Testimonials_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->quick_testimonials_load_shortcode_view();

	}

	/**
	 * Load the shortcode for the plugin
	 *
	 * @since    1.0.0
	 */
	 public function quick_testimonials_load_shortcode_view(){
		 require_once QT_PUBLIC_PARTIALS . 'quick-testimonials-shortcode.php';
		 //require_once QT_PUBLIC_PARTIALS . 'quick-testimonials-slider-shortcode.php';
	 }

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( 'qt-font-awesome', plugin_dir_url( __FILE__ ) . 'assets/css/font-awesome.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'qt-slick', plugin_dir_url( __FILE__ ) . 'assets/css/slick.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'qt-structure', plugin_dir_url( __FILE__ ) . 'assets/css/structure.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'qt-plugin-styles', plugin_dir_url( __FILE__ ) . 'assets/css/plugin-styles.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'qt-responsive', plugin_dir_url( __FILE__ ) . 'assets/css/responsive.css', array(), $this->version, 'all' );

	}


	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		 wp_localize_script( 'jquery', 'get',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'siteurl' => get_template_directory_uri(),
			)
		);

		wp_enqueue_script( 'qt-slick', plugin_dir_url( __FILE__ ) . 'assets/js/slick.min.js', array( 'jquery' ), $this->version, false );
        wp_enqueue_script( 'qt-masonry', plugin_dir_url( __FILE__ ) . 'assets/js/masonry.pkgd.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'qt-plugin-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/plugin-scripts.js', array( 'jquery' ), $this->version, false );

	}

}
