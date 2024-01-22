// swiper
const swiper = new Swiper(".swiper", {
  loop: true,
  speed: 1000,
  // autoplay: {
  //   // 自動再生
  //   delay: 2000, // 2秒後に次のスライド
  // },
   pagination: {
            el: ".swiper-pagination",
            clickable: true,
  },
     // スライドの表示枚数：768px未満の場合
  slidesPerView: 1,
  breakpoints: {
    // スライドの表示枚数：768px以上の場合
    768: {
      slidesPerView: 1.5,
      // spaceBetween: 30, // スライド間の距離
      centeredSlides: true, // アクティブなスライドを中央にする
    }
  }
});

// スムーズなスクロール
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++) {
  smoothScrollTrigger[i].addEventListener("click", (e) => {
    e.preventDefault();
    let href = smoothScrollTrigger[i].getAttribute("href");
    let targetElement = document.getElementById(href.replace("#", ""));
    const rect = targetElement.getBoundingClientRect().top;
    const offset = window.pageYOffset;
    const gap = 100;
    const target = rect + offset - gap;
    window.scrollTo({
      top: target,
      behavior: "smooth",
    });
  });
}
