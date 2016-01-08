<?php
/**
* Main plugin controller
* @package Fact Slider
* @since 1.0
*/

	class FactSliderController {
		public function __construct() {
			if( !is_admin() ) {
				add_action( 'wp', array( $this, 'init' ));
			}
		}	

		public function init() {
			if( is_page() || is_single() ) {
				add_filter( 'the_content', array( &$this, 'render_fact_slider' ))
			}
		}

		public function render_fact_slider( $content ) {
			require_once( '../views/fact-slider.php' );
			$content = FactSliderView::render( $message ) . $content;
			return $content;
		}
	}

	$fact_slider_controller = new FactSliderController();
?>