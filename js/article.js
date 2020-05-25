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
const commentForm = document.querySelector("#comment-form");

// Show TagBox
let tagBoxState = 0;
function tagBoxListn() {
  menuTags.addEventListener("click", (e) => {
    e.preventDefault();
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
  // MENU
  menuResp();

  // TagBox
  tagBoxListn();
});
