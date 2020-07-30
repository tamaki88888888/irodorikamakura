//スワイパー
let mySwiper = new Swiper('.swiper-container', {
    loop: true,
    effect: 'fade',
    autoplay: {
        delay: 3000,
    },
    speed: 1000,
});


$(function() {
    //モーダル関連
    var flag = 0;
    $('.menu-trigger').on('click', function() {
      $(this).toggleClass('active');
      if(flag === 0){
        console.log(flag);
        $('.nav').fadeIn();
        flag = 1;
      }else{
        console.log(flag);
        $('.nav').fadeOut();
        flag = 0;
      }
    });

    //フォームの文字変更
    
    $(".hotel-booking-search h3").text("空き状況検索")
    $(".hb-submit button").text("宿泊状況を確認する")
    $('#hotel-booking-results h3').text("空き部屋状況");
    $('.hb_search_capacity label').text("宿泊可能人数(大人)");
    $('.hb_search_capacity label').text("宿泊可能人数(子供)");

    

    $('.hb-form-table li label').eq(0).text("チェックイン日");
    $('.hb-form-table li label').eq(1).text("チェックアウト日");
    $('.hb-form-table li label').eq(2).text("宿泊人数(大人)");
    $('.hb-form-table li label').eq(3).text("宿泊人数(子供)");


    //チェックインの文字変更
    $('.shop_table tr th').eq(0).text("お部屋");
    $('.shop_table tr th').eq(1).text("チェックイン日付 - チェックアウト日");
    $('.order-total').eq(3).text("合計料金");

  

    

  });