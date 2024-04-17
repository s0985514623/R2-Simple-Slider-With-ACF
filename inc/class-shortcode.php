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
			\wp_enqueue_style( 'swiper', Plugin::$dir . '\css\swiper-bundle.min.css' );
			\wp_enqueue_script( 'swiper', Plugin::$dir . '\js\swiper-bundle.min.js' );
		}
	}
	/**
	 * Shortcode callback function
	 *
	 * @return html
	 */
	public function shortcode_callback() {

		$html = '';
		ob_start();
		?>
<div id="">test2</div>
		<?php
		$html .= ob_get_clean();

		return $html;
	}
}
