/**
 * Onload page -- animation
 */
function loader() {
  const main = document.getElementById("main");
  document.body.style.backgroundColor = "black";
  document.body.style.color = "#edebdc";
  main.style.display = "block";
  animateTitleWeb();
  animateTitleDeveloper();
  animateTitle();
}
function onMouseMove(e) {
  let cursor = document.getElementById("cursor");
  cursor.style.left = e.pageX - 10 + "px";
  cursor.style.top = e.pageY - 10 + "px";
}
document.addEventListener("mousemove", onMouseMove);

/**
 * MENU
 */
function openMenu() {
  const menu = document.getElementById("menu");
  menu.style.opacity = 1;
  menu.style.width = "100%";
  menu.style.top = "0%";
}

function closeMenu() {
  const menu = document.getElementById("menu");
  menu.style.width = "0%";
  menu.style.top = "100%";
  menu.style.opacity = 0;
}

window.onscroll = function () {
  rotateImages();
  translateAbout();
  translateWorks();
  translateContact();
};

function rotateImages() {
  const react = document.getElementById("svgReact");
  const symfony = document.getElementById("svgSymfony");
  react.style.transform = "rotate(" + window.pageYOffset / 4 + "deg)";
  symfony.style.transform = "rotate(" + window.pageYOffset / 4 + "deg)";
}
function translateAbout() {
  const aboutLeft = document.getElementById("about_left");
  const aboutRight = document.getElementById("about_right");
  aboutLeft.style.transform = "translateX(" + window.pageYOffset / 150 + "%)";
  aboutRight.style.transform = "translateX(" + window.pageYOffset / -300 + "%)";
}

function translateWorks() {
  const works_left = document.getElementById("works_left");
  const works_right = document.getElementById("works_right");
  works_left.style.transform = "translateX(" + window.pageYOffset / 150 + "%)";
  works_right.style.transform =
    "translateX(" + window.pageYOffset / -300 + "%)";
}
function translateContact() {
  const contact_left = document.getElementById("contact_left");
  const contact_right = document.getElementById("contact_right");
  contact_left.style.transform =
    "translateX(" + window.pageYOffset / 150 + "%)";
  contact_right.style.transform =
    "translateX(" + window.pageYOffset / -300 + "%)";
}

/**
 * Posters
 */
const posters = document.querySelectorAll(".posters");
const projects = document.querySelectorAll(".projects");
for (let i = 0; i < projects.length; i++) {
  projects[i].addEventListener("mousemove", showPoster);
  projects[i].addEventListener("mouseleave", showPosterLeave);
  projects[i].myParam = posters[i];
}
function showPoster(e) {
  e.currentTarget.myParam.style.display = "block";
  e.currentTarget.myParam.style.height = "500px";
  e.currentTarget.myParam.style.width = "350px";
  e.currentTarget.myParam.style.top = e.pageY - 250 + "px";
  e.currentTarget.myParam.style.left = e.pageX - 175 + "px";
}
function showPosterLeave(e) {
  e.currentTarget.myParam.style.height = "0px";
  e.currentTarget.myParam.style.width = "0px";
}

function animateTitleWeb() {
  // Wrap every letter in a span
  var textWrapper = document.querySelector(".web-title .letters");
  textWrapper.innerHTML = textWrapper.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
  );

  anime.timeline({ loop: 1 }).add({
    targets: ".web-title .letter",
    translateY: ["1.1em", 0],
    translateX: ["0.55em", 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 1500,
    easing: "easeOutExpo",
    delay: (el, i) => 50 * i,
  });
}
function animateTitleDeveloper() {
  // Wrap every letter in a span
  var textWrapper = document.querySelector(".developer-title .letters");
  textWrapper.innerHTML = textWrapper.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
  );

  anime.timeline({ loop: 1 }).add({
    targets: ".developer-title .letter",
    translateY: ["1.1em", 0],
    translateX: ["0.55em", 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 1700,
    easing: "easeOutExpo",
    delay: (el, i) => 50 * i,
  });
}
function animateTitle() {
  // Wrap every letter in a span
  var textWrapper = document.querySelector(".title .letters");
  textWrapper.innerHTML = textWrapper.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
  );

  anime.timeline({ loop: 1 }).add({
    targets: ".title .letter",
    translateY: ["-3em", 0],
    translateX: ["5em", 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 2000,
    easing: "easeOutExpo",
    delay: (el, i) => 50 * i,
  });
}
function returnHome() {
  location.href = "../index.html";
}
