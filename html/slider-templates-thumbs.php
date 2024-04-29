<?php
/**
 * Slider templates
 */

// 解構賦值 $args.
[
		'img'         => $img,
] = $args;

if ( ! empty( $img ) ) :
	?>
	<div class="swiper-slide w-full rounded-lg overflow-hidden ">
		<div class="slider-content w-full  " >
		<img src="<?php echo esc_url( $img ); ?>" alt="" class="object-cover w-full ">
		</div>
	</div>
<?php endif; ?>
