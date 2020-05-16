// VARS
const mainLBImg = document.querySelector('.interesting-fact-img');
const video = document.querySelector('.showcase-video');
const footer = document.querySelector('footer');
const mainLB = document.querySelector('.main-left');
const mainRB = document.querySelector('.main-right');
const intFact = document.querySelector('.interesting-fact-text');
const showcaseCont = document.querySelector('.showcase-container');
const menuWrapper = document.querySelector('.menu-wrapper');
const nav = document.querySelector('nav');

// ANIMATION PART
let scroller =
  window.requestAnimationFrame ||
  function (callback) {
    window.setTimeout(callback, 1000 / 60);
  };

function isElementInViewport(el) {
  let DOMRect = el.getBoundingClientRect();
  let inView = Math.floor(DOMRect.bottom) - window.innerHeight;
  return inView <= DOMRect.height - 10;
}

function looper(arr, cl, rem) {
  if (typeof arr === 'array') {
    arr.forEach((el) => el.classList.add(rem));
    arr.forEach((element) => {
      if (isElementInViewport(element)) {
        element.classList.remove(rem);
        element.classList.add(cl);
        return true;
      }
    });
  } else {
    arr.classList.add(rem);
    if (isElementInViewport(arr)) {
      arr.classList.remove(rem);
      arr.classList.add(cl);
      return true;
    }
  }
  scroller(() => {
    looper(arr, cl, rem);
  });
}

// Menu Part

// function menuResp() {
//   let clicked = 0;
//   let burger = document.createElement('div');
//   for (let i = 0; i < 3; i++) {
//     let newLine = document.createElement('div');
//     newLine.classList.add(`line${i + 1}`);
//     burger.appendChild(newLine);
//   }
//   burger.classList.add('burger');
//   nav.appendChild(burger);
//   burger.style.top =
//     nav.clientHeight / 2 -
//     document.querySelector('.burger').clientHeight / 2 +
//     'px';

//   burger.addEventListener('click', () => {
//     if (clicked) {
//       menuWrapper.style.transition = 'display 1s';
//       menuWrapper.style.display = 'none';
//       clicked = 0;
//     } else {
//       menuWrapper.style.display = 'block';
//       clicked = 1;
//     }
//   });
// }

// DOMCONTENT LOADED
document.addEventListener('DOMContentLoaded', () => {
  // Showcase video style
  video.style.height = '100vh';
  video.style.width = '100vw';
  video.style.objectFit = 'cover';
  video.play();
  video.autoplay = true;

  //Animation
  looper(mainLBImg, 'showImg', 'hideImg');
  looper(mainLB, 'showMainLB', 'hideMainLB');
  looper(intFact, 'showMainLB', 'hideMainLB');
  looper(mainRB, 'showMainRB', 'hideMainRB');

  // MENU
  // menuResp();
});
