document.addEventListener("DOMContentLoaded", function() {

  if (window.location.pathname.includes('libro')) {

    const descriptionBtn = document.querySelector("#description-btn");
    const fichaBtn = document.querySelector("#ficha-btn");
    const internaDescription = document.querySelector("#interna-description");
    const internaFicha = document.querySelector("#interna-ficha");

    descriptionBtn.addEventListener('click', descriptionBtnClick);
    fichaBtn.addEventListener('click', fichaBtnClick);

    function descriptionBtnClick () {
      internaDescription.classList.add("interna-description_activo");
      internaFicha.classList.remove("interna-description_activo");
      descriptionBtn.classList.add("interna-subtitulos_activo");
      fichaBtn.classList.remove("interna-subtitulos_activo");
    }

    function fichaBtnClick () {
      internaDescription.classList.remove("interna-description_activo");
      internaFicha.classList.add("interna-description_activo");
      descriptionBtn.classList.remove("interna-subtitulos_activo");
      fichaBtn.classList.add("interna-subtitulos_activo");
    }
  }
})