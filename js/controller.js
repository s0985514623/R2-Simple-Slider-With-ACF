// Banner Slider
const r2_slider = new Swiper(".r2-slider.r2-banner", {
  // autoplay: {
  //   delay: 3000,
  // },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
// Comment Slider
const r2_comment_mobile = new Swiper(".r2-slider.r2-comment", {
  // autoplay: {
  //   delay: 3000,
  // },
	slidesPerView: "auto",
	spaceBetween: 25,
	loop: true,
	centeredSlides: true,
	pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
	breakpoints: {
    768: {
      slidesPerView: 3,
    },
  },
});
const r2_comment_thumbs = new Swiper(".r2-slider-comment-thumbs", {
  // autoplay: {
  //   delay: 3000,
  // },
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  centeredSlides: true,
  on: {
    init: function () {
      const swiper = this;
      setSlideHeight(swiper);
    },
    resize: function () {
      const swiper = this;
      setSlideHeight(swiper); // 也在窗口大小改变时调整高度
    },
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
});
r2_comment_thumbs.changeLanguageDirection("rtl");

const r2_comment = new Swiper(".r2-slider-comment", {
  // autoplay: {
  //   delay: 3000,
  // },
  effect: "fade",
  crossFade: true,
  slidesPerView: 1,
  loop: true,
  // spaceBetween: 20,
});
r2_comment_thumbs.controller.control = r2_comment;
// r2_comment.controller.control = r2_comment_thumbs;

function setSlideHeight(swiper) {
  let slides = swiper.slides;
  for (let i = 0; i < slides.length; i++) {
    const slideWidth = slides[i].offsetWidth;
    slides[i].style.height = `${slideWidth}px`;
  }
}
