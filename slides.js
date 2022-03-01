$(function(){
    $('.top-slides').slick({
      autoplay: true, //自動でスクロール
      autoplaySpeed: 3000, //自動再生のスライド切り替えまでの時間を設定
      speed: 500, //スライドが流れる速度を設定
      cssEase: "ease", //スライドの流れ方を等速に設定
      slidesToShow: 1, //表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      centerMode: true,
    });
  });