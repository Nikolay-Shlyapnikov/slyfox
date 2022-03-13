var show = document.querySelectorAll('.show-description') || [];
var accordionContent = document.querySelectorAll('.description');
show = [].slice.apply(show); // toArray
var i;
var indexOfAccordion;
var texta = document.querySelectorAll('.show-description-text'); 
var strelki = document.querySelectorAll('.show-arrow'); 
show.forEach(function(element, i) {

    element.addEventListener('click', function() {
        // номер дива на который кликнули
        indexOfAccordion = i;
        if (!accordionContent[i].classList.contains("active")) {
            accordionContent[i].classList.add("active");
              strelki[i].classList.remove("passive-strelocka")
            strelki[i].classList.add("active-strelocka");
 
            accordionContent[i].style.maxHeight = accordionContent[i].scrollHeight + "px";

            texta[i].textContent = `Скрыть`
            
        } else {
            accordionContent[i].classList.remove("active");
            accordionContent[i].style.maxHeight = null;
            strelki[i].classList.remove("active-strelocka")
            strelki[i].classList.add("passive-strelocka");
            texta[i].textContent = `Показать`
        }

        console.log(indexOfAccordion);

    })
});