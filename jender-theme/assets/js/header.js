const mainNav = document.querySelector("#navigation");
const navBtn = document.querySelector("#navMenu-btn");
const navClose = document.querySelector("#navMenu-close");
const header = document.querySelector("#header");
const presentacion = document.querySelector("#presentacion-lateral");
const html = document.querySelector("html");

navBtn.addEventListener('click', toggleMenu);
navClose.addEventListener('click', toggleMenu);

function toggleMenu () {
  mainNav.classList.toggle("show");
  navBtn.classList.toggle("show");
  navClose.classList.toggle("show");
  header.classList.toggle("show");
  presentacion.classList.toggle("hide");
  html.classList.toggle("hide");
}
