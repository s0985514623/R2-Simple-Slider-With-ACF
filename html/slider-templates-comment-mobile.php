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
<div class="swiper-slide !w-3/4">
		<div class="slider-content w-full h-full py-5 flex flex-col gap-5 items-center">
			<div class="content pb-4">
			<img src="<?php echo esc_url( $img ); ?>" alt="" class="object-cover w-full !rounded-[44px]">
			<div class="bg-[#407F6A] rounded-full text-center mx-14 w-auto -translate-y-1/2">
				<span class="text-sm font-medium text-white"><?php echo esc_html( $main_title ); ?></span>
			</div>
				<div class="start-wrapper mb-2 flex space-x-2 justify-center">
								<span>
								<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
									d="M11.9062 4.71875L16.375 5.375C16.75 5.4375 17.0625 5.6875 17.1875 6.0625C17.3125 6.40625 17.2188 6.8125 16.9375 7.0625L13.6875 10.2812L14.4688 14.8438C14.5312 15.2188 14.375 15.5938 14.0625 15.8125C13.75 16.0625 13.3438 16.0625 13 15.9062L9 13.75L4.96875 15.9062C4.65625 16.0625 4.21875 16.0625 3.9375 15.8125C3.625 15.5938 3.46875 15.2188 3.53125 14.8438L4.28125 10.2812L1.03125 7.0625C0.75 6.8125 0.65625 6.40625 0.78125 6.0625C0.90625 5.6875 1.21875 5.4375 1.59375 5.375L6.09375 4.71875L8.09375 0.5625C8.25 0.21875 8.59375 0 9 0C9.375 0 9.71875 0.21875 9.875 0.5625L11.9062 4.71875Z"
									fill="#FFBA08"
									/>
								</svg>
								</span>
								<span>
								<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
									d="M11.9062 4.71875L16.375 5.375C16.75 5.4375 17.0625 5.6875 17.1875 6.0625C17.3125 6.40625 17.2188 6.8125 16.9375 7.0625L13.6875 10.2812L14.4688 14.8438C14.5312 15.2188 14.375 15.5938 14.0625 15.8125C13.75 16.0625 13.3438 16.0625 13 15.9062L9 13.75L4.96875 15.9062C4.65625 16.0625 4.21875 16.0625 3.9375 15.8125C3.625 15.5938 3.46875 15.2188 3.53125 14.8438L4.28125 10.2812L1.03125 7.0625C0.75 6.8125 0.65625 6.40625 0.78125 6.0625C0.90625 5.6875 1.21875 5.4375 1.59375 5.375L6.09375 4.71875L8.09375 0.5625C8.25 0.21875 8.59375 0 9 0C9.375 0 9.71875 0.21875 9.875 0.5625L11.9062 4.71875Z"
									fill="#FFBA08"
									/>
								</svg>
								</span>
								<span>
								<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
									d="M11.9062 4.71875L16.375 5.375C16.75 5.4375 17.0625 5.6875 17.1875 6.0625C17.3125 6.40625 17.2188 6.8125 16.9375 7.0625L13.6875 10.2812L14.4688 14.8438C14.5312 15.2188 14.375 15.5938 14.0625 15.8125C13.75 16.0625 13.3438 16.0625 13 15.9062L9 13.75L4.96875 15.9062C4.65625 16.0625 4.21875 16.0625 3.9375 15.8125C3.625 15.5938 3.46875 15.2188 3.53125 14.8438L4.28125 10.2812L1.03125 7.0625C0.75 6.8125 0.65625 6.40625 0.78125 6.0625C0.90625 5.6875 1.21875 5.4375 1.59375 5.375L6.09375 4.71875L8.09375 0.5625C8.25 0.21875 8.59375 0 9 0C9.375 0 9.71875 0.21875 9.875 0.5625L11.9062 4.71875Z"
									fill="#FFBA08"
									/>
								</svg>
								</span>
								<span>
								<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
									d="M11.9062 4.71875L16.375 5.375C16.75 5.4375 17.0625 5.6875 17.1875 6.0625C17.3125 6.40625 17.2188 6.8125 16.9375 7.0625L13.6875 10.2812L14.4688 14.8438C14.5312 15.2188 14.375 15.5938 14.0625 15.8125C13.75 16.0625 13.3438 16.0625 13 15.9062L9 13.75L4.96875 15.9062C4.65625 16.0625 4.21875 16.0625 3.9375 15.8125C3.625 15.5938 3.46875 15.2188 3.53125 14.8438L4.28125 10.2812L1.03125 7.0625C0.75 6.8125 0.65625 6.40625 0.78125 6.0625C0.90625 5.6875 1.21875 5.4375 1.59375 5.375L6.09375 4.71875L8.09375 0.5625C8.25 0.21875 8.59375 0 9 0C9.375 0 9.71875 0.21875 9.875 0.5625L11.9062 4.71875Z"
									fill="#FFBA08"
									/>
								</svg>
								</span>
								<span>
								<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
									d="M11.9062 4.71875L16.375 5.375C16.75 5.4375 17.0625 5.6875 17.1875 6.0625C17.3125 6.40625 17.2188 6.8125 16.9375 7.0625L13.6875 10.2812L14.4688 14.8438C14.5312 15.2188 14.375 15.5938 14.0625 15.8125C13.75 16.0625 13.3438 16.0625 13 15.9062L9 13.75L4.96875 15.9062C4.65625 16.0625 4.21875 16.0625 3.9375 15.8125C3.625 15.5938 3.46875 15.2188 3.53125 14.8438L4.28125 10.2812L1.03125 7.0625C0.75 6.8125 0.65625 6.40625 0.78125 6.0625C0.90625 5.6875 1.21875 5.4375 1.59375 5.375L6.09375 4.71875L8.09375 0.5625C8.25 0.21875 8.59375 0 9 0C9.375 0 9.71875 0.21875 9.875 0.5625L11.9062 4.71875Z"
									fill="#FFBA08"
									/>
								</svg>
								</span>
							</div>
				<p class="!mb-0 text-sm font-medium text-[#120402] line-clamp-2"><?php echo esc_html( $sec_title ); ?></p>
			</div>

				<a href="<?php echo esc_html( $slider_link ); ?>" class="w-fit text-xl font-medium text-white bg-[#407F6A] py-2.5 px-6 rounded-full ">享味好實在 ></a>

		</div>
	</div>
<?php endif; ?>
