<?php
/**
 * Shortcode class.
 */

declare (strict_types = 1);

namespace R2\SimpleSlider;

use R2\SimpleSlider\Plugin;
/**
 * ShortCode class
 */
final class ShortCode {

	/**
	 * Construct function
	 *
	 * @param string $shortcode Shortcode name.
	 */
	public function __construct( $shortcode = '' ) {
		if ( ! empty( $shortcode ) ) {
			\add_shortcode( $shortcode, array( $this, 'shortcode_callback' ) );
			\add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue' ) );
		}
	}
	/**
	 * Wp_enqueue function
	 *
	 * @return void
	 */
	public function wp_enqueue() {
		\wp_enqueue_style( 'swiper-css', Plugin::$url . '/css/swiper-bundle.min.css' );
		\wp_enqueue_style( 'output-css', Plugin::$url . '/css/output.css' );
		\wp_enqueue_script( 'swiper-js', Plugin::$url . '/js/swiper-bundle.min.js', null, null, true );
		\wp_enqueue_script( 'swiper-controller', Plugin::$url . '/js/controller.js', null, null, true );
	}
	/**
	 * Shortcode callback function
	 */
	public function shortcode_callback() {
		// Check rows exists.
		if ( have_rows( 'banner_swiper' ) ) :
			echo '<div class="swiper r2-slider">';
			echo '<div class="swiper-wrapper">';
			// Loop through rows.
			while ( have_rows( 'banner_swiper' ) ) :
				the_row();

				// Load sub field value.
				$main_title  = get_sub_field( 'main_title' );
				$sec_title   = get_sub_field( 'sec_title' );
				$slider_link = get_sub_field( 'link' );
				$img         = get_sub_field( 'img' );
				\load_template(
					Plugin::$dir . '/html/slider-templates.php',
					false,
					array(
						'main_title'  => $main_title,
						'sec_title'   => $sec_title,
						'slider_link' => $slider_link,
						'img'         => $img,
					)
				);

				// End loop.
			endwhile;
			echo '</div>';
			echo '<div class="swiper-controller-wrap flex space-x-5 items-center absolute right-[110px] bottom-[110px] z-20 rounded-full py-1 px-2">';
			echo '<div class="swiper-button-prev"></div>';
			echo '<div class="swiper-button-next"></div>';
			echo '<div class="swiper-pagination"></div>';
			echo '</div>';
			echo '</div>';
			// No value.
			else :
				// Do something...
				echo 'No rows found.';
			endif;
	}
}
