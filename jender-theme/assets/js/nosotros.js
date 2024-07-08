document.addEventListener("DOMContentLoaded", function() {

    if (window.location.pathname.includes('/nosotros/')) {

        const qaButtons = document.querySelectorAll(".qa-button");
        qaButtons.forEach(element => {
            element.addEventListener('click', qaBtnClick);
        });

        function qaBtnClick (event) {
            const questionButton = event.target;
            const answer = questionButton.parentElement.querySelector(".qa-answer");

            if (questionButton.classList.contains("qa-button-active")) {
                questionButton.classList.remove("qa-button-active");
                answer.classList.remove("qa-answer-active");

            } else {
                questionButton.classList.add("qa-button-active");
                answer.classList.add("qa-answer-active");            
            }
        }
    }
})