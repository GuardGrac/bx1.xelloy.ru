const swiper = new Swiper('.mySwiper', {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },  
    });
  
  swiper.on('slideChange', function (e) {
    Array.from(document.querySelectorAll('.mySwiper .swiper-slide')).forEach(element => {
        element.classList.remove('swiper-growth');
        element.classList.remove('swiper-unGrowth');
    });
    if(window.innerWidth >= 1536){
         document.querySelectorAll('.mySwiper .swiper-slide')[swiper.activeIndex].classList.add('swiper-growth');
         document.querySelectorAll('.mySwiper .swiper-slide')[swiper.activeIndex+1].classList.add('swiper-unGrowth');
    }
  }); 