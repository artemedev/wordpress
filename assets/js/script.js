$('.images-product__mainslider').slick({
    // prevArrow: '<button class="slick-btn slick-btn__left"><svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.72911e-07 13.5L21.75 0.942635L21.75 26.0574L1.72911e-07 13.5Z" fill="white"/></svg></button>',
    // nextArrow: '<button class="slick-btn slick-btn__right"><svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 13.5L0.250001 26.0574L0.250002 0.942631L22 13.5Z" fill="white"/></svg></button>',
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.images-product__subslider',
});
$('.images-product__subslider').slick({
    // prevArrow: '<button class="slick-btn slick-btn__left"><svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.72911e-07 13.5L21.75 0.942635L21.75 26.0574L1.72911e-07 13.5Z" fill="white"/></svg></button>',
    // nextArrow: '<button class="slick-btn slick-btn__right"><svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 13.5L0.250001 26.0574L0.250002 0.942631L22 13.5Z" fill="white"/></svg></button>',
    arrows: false,
    infinite: true,
   // centerMode: true,

   // asNavFor: '.images-product__mainslider',
    slidesToShow: 3, 
    focusOnSelect: true,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
});
