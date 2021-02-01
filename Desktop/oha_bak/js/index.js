
//swiper start
$(function(){
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4, // 슬라이드를 한번에 3개를 보여준다
        spaceBetween: 30, // 슬라이드간 padding 값 30px 씩 떨어뜨려줌
        //centeredSlides: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1280: {
                slidesPerView: 4
            },
            720: {
                slidesPerView: 1
            },
        }
      });
//swiper end



});

//section2 mouseenter event
$(function(){
    $('.cont1').mouseenter(function(){
        $('.img_hover1').fadeIn(200);
        return false;
    });
    $('.cont1').mouseleave(function(){
        $('.img_hover1').fadeOut(200);
        return false;
    });
    $('.cont2').mouseenter(function(){
        $('.img_hover2').fadeIn(200);
        return false;
    });
    $('.cont2').mouseleave(function(){
        $('.img_hover2').fadeOut(200);
        return false;
    });
    $('.cont3').mouseenter(function(){
        $('.img_hover3').fadeIn(200);
        return false;
    });
    $('.cont3').mouseleave(function(){
        $('.img_hover3').fadeOut(200);
        return false;
    });
}) ;

//문의,상담 chk / sendemail
function submitChk(f) {
    f.action = "./_inc/form_ok.php";
    return true;
}
