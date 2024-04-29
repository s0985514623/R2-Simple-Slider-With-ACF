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

	const SHORTCODE_ARRAY = array( 'r2_slider_banner', 'r2_slider_comment' );
	/**
	 * Construct function
	 */
	public function __construct() {
		\add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue' ) );
		foreach ( self::SHORTCODE_ARRAY as $shortcode ) {
			\add_shortcode( $shortcode, array( $this, $shortcode . '_shortcode_callback' ) );
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
	 * R2_slider_banner callback function
	 */
	public function r2_slider_banner_shortcode_callback() {
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
			echo '<div class="swiper-controller-wrap flex space-x-5 items-center absolute right-1/2 translate-x-1/2 bottom-5 sm:right-[110px] sm:bottom-[110px] z-20 rounded-full py-1 px-2">';
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
	/**
	 * R2_slider_Comment_shortcode_callback function
	 */
	public function r2_slider_comment_shortcode_callback() {
		// Check rows exists.
		if ( have_rows( 'comment_swiper' ) ) :
			echo '<div class="swiper r2-slider-comment-wrap flex !max-w-none !w-full">';
			echo '<div class="swiper r2-slider-comment-thumbs w-2/3 !-ml-[100px] !mr-16">';
			echo '<div class="swiper-wrapper pb-10">';
			while ( have_rows( 'comment_swiper' ) ) :
				the_row();
				// Load sub field value.
				$img = get_sub_field( 'img' );
				\load_template(
					Plugin::$dir . '/html/slider-templates-thumbs.php',
					false,
					array(
						'img' => $img,
					)
				);
				// End loop.
			endwhile;
			echo '</div>';
			echo '<div class="swiper-controller-wrap flex space-x-5 items-center absolute right-[110px] bottom-0 z-20 rounded-full py-1 px-2">';
			echo '<div class="swiper-button-prev"></div>';
			echo '<div class="swiper-button-next"></div>';
			echo '<div class="swiper-pagination"></div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="swiper r2-slider-comment w-1/3 !mx-0 max-w-[405px]">';
			echo '<div class="swiper-wrapper ">';
			while ( have_rows( 'comment_swiper' ) ) :
				the_row();

				// Load sub field value.
				$main_title = get_sub_field( 'main_title' );
				$sec_title  = get_sub_field( 'sec_title' );
				\load_template(
					Plugin::$dir . '/html/slider-templates-comment.php',
					false,
					array(
						'main_title' => $main_title,
						'sec_title'  => $sec_title,
					)
				);

				// End loop.
			endwhile;

			echo '</div>';
			echo '</div>';
			echo '</div>';
			// No value.
			else :
				// Do something...
				echo 'No rows found.';
				endif;
	}
}
