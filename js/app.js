// VARS
const mainLBImg = document.querySelector(".interesting-fact-img");
const video = document.querySelector(".showcase-video");
const footer = document.querySelector("footer");
const mainLB = document.querySelector(".main-left");
const mainRB = document.querySelector(".main-right");
const intFact = document.querySelector(".interesting-fact-text");
const showcaseCont = document.querySelector(".showcase-container");
const menuWrapper = document.querySelector(".menu-wrapper");
const nav = document.querySelector("nav");
const burger = document.querySelector(".burger");
const tagBoxWrap = document.querySelector(".tagBox-wrap");
const menuTags = document.querySelector(".menuTags");
const tagBoxCloser = document.querySelector(".tagBox-closer");

// Show TagBox
let tagBoxState = 0;
function tagBoxListn() {
  menuTags.addEventListener("click", () => {
    if (tagBoxState == 0) {
      tagBoxWrap.classList.add("showTag");
      clicked = 0;
      if (window.innerWidth <= 800) {
        menuWrapper.style.display = "none";
        burger.classList.remove("X");
      }
      tagBoxState++;
    } else if (tagBoxState == 1) {
      tagBoxWrap.classList.remove("showTag");
      tagBoxState = 0;
    }
  });
  tagBoxCloser.addEventListener("click", () => {
    tagBoxWrap.classList.remove("showTag");
    tagBoxState = 0;
  });
}

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
  if (typeof arr === "array") {
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
let clicked = 0;
function menuResp() {
  burger.addEventListener("click", () => {
    if (clicked == 0) {
      menuWrapper.style.display = "grid";
      clicked++;
      burger.classList.add("X");
    } else if (clicked == 1) {
      menuWrapper.style.display = "none";
      clicked = 0;
      burger.classList.remove("X");
    }
  });
}

// DOMCONTENT LOADED
document.addEventListener("DOMContentLoaded", () => {
  // Showcase video style
  video.style.height = "100vh";
  video.style.width = "100vw";
  video.style.objectFit = "cover";
  video.play();
  video.autoplay = true;

  //Animation
  looper(mainLBImg, "showImg", "hideImg");
  looper(mainLB, "showMainLB", "hideMainLB");
  looper(intFact, "showMainLB", "hideMainLB");
  looper(mainRB, "showMainRB", "hideMainRB");

  // MENU
  menuResp();

  // TagBox
  tagBoxListn();

  // Go to article.php on article click
  window.onclick = (e) => {
    let targ = e.target;

    if (targ.classList.contains("article")) {
      targ.childNodes[7].childNodes[0].click();
    } else if (
      targ.classList.contains("idx-art-h2") ||
      targ.classList.contains("idx-art-para") ||
      targ.classList.contains("idx-art-img")
    ) {
      targ.parentElement.childNodes[7].childNodes[0].click();
    }
  };
});
