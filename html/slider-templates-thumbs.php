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
	<div class="swiper-slide w-full ">
		<div class="slider-content w-full h-full" >
		<img src="<?php echo esc_url( $img ); ?>" alt="" class="object-cover">
		</div>
	</div>
<?php endif; ?>
