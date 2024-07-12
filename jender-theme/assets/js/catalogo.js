document.addEventListener("DOMContentLoaded", function() {

  if (window.location.pathname.includes('catalogo')) {

    const titulosBtn = document.querySelector("#titulos-btn");
    const autoresBtn = document.querySelector("#autores-btn");
    const titulosCatalogo = document.querySelector("#titulos-catalogo");
    const autoresCatalogo = document.querySelector("#autores-catalogo");

    titulosBtn.addEventListener('click', titulosBtnClick);
    autoresBtn.addEventListener('click', autoresBtnClick);

    function titulosBtnClick () {
      titulosCatalogo.classList.add("catalogo-principal_activo");
      autoresCatalogo.classList.remove("catalogo-principal_activo");
      titulosBtn.classList.add("catalogo-subtitulos_activo");
      autoresBtn.classList.remove("catalogo-subtitulos_activo");
    }

    function autoresBtnClick () {
      titulosCatalogo.classList.remove("catalogo-principal_activo");
      autoresCatalogo.classList.add("catalogo-principal_activo");
      titulosBtn.classList.remove("catalogo-subtitulos_activo");
      autoresBtn.classList.add("catalogo-subtitulos_activo");
    }
  }
})