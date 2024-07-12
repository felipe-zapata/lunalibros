document.addEventListener("DOMContentLoaded", function() {

    if (window.location.pathname.includes('blog')) {
    
        const blogArreglo = document.querySelector(".blog-subtitulos");
        const blogTopics = Array.from(blogArreglo.querySelectorAll("div[id^='blog-']"));
        
        blogTopics.forEach(element => {
            element.addEventListener('click', topicsBtnClick);
        });

        function topicsBtnClick (event) {
            const clickedElement = event.target;

            blogTopics.forEach(element => {
                element.classList.remove('catalogo-subtitulos_activo');
            });
            clickedElement.classList.add('catalogo-subtitulos_activo');
                
            // Remove the .blog-grid_active from all divs
            const grids = Array.from(document.querySelectorAll('.blog-grid'));
            grids.forEach(grid => {
                grid.classList.remove('blog-grid_activo');
            });

            // Add .blog-grid_active to the div with id #blog-grid-*
            const idTopic = clickedElement.id.split('-').pop(); // Get the last part after the dash
            const gridTopic = document.querySelector(`#blog-grid-${idTopic}`);
            gridTopic.classList.add('blog-grid_activo');     
        }
    }
})