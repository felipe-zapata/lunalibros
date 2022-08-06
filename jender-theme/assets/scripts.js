const mainNav = document.querySelector('.main-nav ul');
const navBtn = document.querySelector('.navMenu-btn');

navBtn.addEventListener('click',() =>{
    mainNav.classList.toggle('change');
})