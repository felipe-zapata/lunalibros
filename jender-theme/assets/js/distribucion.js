
document.addEventListener("DOMContentLoaded", function() {
    
    const distribucionArreglo = document.querySelector(".distribucion-subtitulos");
    const distribucionPaises = Array.from(distribucionArreglo.querySelectorAll("div[id^='distribucion-']"));

    
    distribucionPaises.forEach(element => {
        element.addEventListener('click', paisesBtnClick);
    });


    function paisesBtnClick (event) {
        const clickedElement = event.target;    
    
        distribucionPaises.forEach(element => {
            element.classList.remove('catalogo-subtitulos_activo');
        });
        clickedElement.classList.add('catalogo-subtitulos_activo');
               
        // Remove the .distribucion-grid_active from all divs
        const grids = Array.from(document.querySelectorAll('.distribucion-grid'));
        grids.forEach(grid => {
            grid.classList.remove('distribucion-grid_activo');
        });

        // Add .distribucion-grid_active to the div with id #distribucion-grid-*
        const idPais = clickedElement.id.split('-').pop(); // Get the last part after the dash
        const gridPais = document.querySelector(`#distribucion-grid-${idPais}`);
        gridPais.classList.add('distribucion-grid_activo');     
      }
})