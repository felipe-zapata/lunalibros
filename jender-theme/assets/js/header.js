const mainNav = document.querySelector("#navigation");
const navBtn = document.querySelector("#navMenu-btn");
const navClose = document.querySelector("#navMenu-close");

navBtn.addEventListener('click', toggleMenu);
navClose.addEventListener('click', toggleMenu);

function toggleMenu () {
  mainNav.classList.toggle("show");
  navBtn.classList.toggle("show");
  navClose.classList.toggle("show");
}
