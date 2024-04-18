<?php
/**
 * Slider templates
 */

// 解構賦值 $args.
[
		'main_title'  => $main_title,
		'sec_title'   => $sec_title,
		'slider_link' => $slider_link,
		'img'         => $img,
] = $args;

if ( ! empty( $main_title ) ) :
	?>
	<div class="swiper-slide w-full ">
	<a href="<?php echo esc_url( $slider_link ); ?>" class="btn">
		<div class="slider-content w-full h-full pb-40 flex flex-col justify-center items-center bg-no-repeat bg-cover" style="background-image: url(<?php echo esc_url( $img ); ?>)">
			<h2 class="main_title !mb-0"><?php echo esc_html( $main_title ); ?></h2>
			<p class="sec_title !mb-0"><?php echo esc_html( $sec_title ); ?></p>
		</div>
		</a>
	</div>
<?php endif; ?>
