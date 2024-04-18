// Banner Slider
var swiper = new Swiper(".r2-slider", {
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

var comment_thumbs = new Swiper(".r2-slider-comment-thumbs", {
  // autoplay: {
  //   delay: 3000,
  // },
  slidesPerView: 2,
  spaceBetween: 20,
  // watchSlidesProgress: true,
  // freeMode: true,
  // loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
comment_thumbs.changeLanguageDirection("rtl");
var comment = new Swiper(".r2-slider-comment", {
  // autoplay: {
  //   delay: 3000,
  // },
  effect: "fade",
  slidesPerView: 1,
  // loop: true,
  // spaceBetween: 20,
  thumbs: {
    swiper: comment_thumbs,
  },
});
// comment_thumbs.on("slideChange", function () {
//   console.log("comment_thumbs.activeIndex:", comment_thumbs);
//   comment.slideTo(comment_thumbs.activeIndex);
// });
