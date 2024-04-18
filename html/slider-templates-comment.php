<?php
/**
 * Slider templates
 */

// 解構賦值 $args.
[
		'main_title'  => $main_title,
		'sec_title'   => $sec_title,
] = $args;

if ( ! empty( $main_title ) ) :
	?>
	<div class="swiper-slide w-full ">
		<div class="slider-content w-full h-full">
			<h2 class="main_title !mb-0"><?php echo esc_html( $main_title ); ?></h2>
			<p class="sec_title !mb-0"><?php echo esc_html( $sec_title ); ?></p>
		</div>
	</div>
<?php endif; ?>
