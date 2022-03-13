let line = document.querySelector('.triple-slider__track');
let tripleSlides = document.querySelectorAll('.slide__block');
let slideWidthArray = [];
let remainderWidthArray = [];
let lineWidth = line.offsetWidth;
let indent = document.querySelectorAll('.remainder');
let offset = 0;
let step = 0;
let slideIndex = document.querySelector('.triple-slider__index');
const screenWidth = document.documentElement.offsetWidth;
let numbers = document.querySelectorAll('.number-slide-black');
let countOfSlides;
if (screenWidth > 1200) {
    countOfSlides = 3;
}
if (1200 > screenWidth) {
    countOfSlides = 2;
}


for (i = 0; i < indent.length; i++) {

    remainderWidthArray.push(indent[i].offsetWidth);
}

for (i = 0; i < tripleSlides.length; i++) {

    slideWidthArray.push(tripleSlides[i].offsetWidth);
}
slideWidthArray[0] = slideWidthArray[0];

let autotripleSlider = setInterval(() => nextTripleSlide(), 5000);
paginationPosition = 0;

function clickNextTripleSlide() {
    clearInterval(autotripleSlider);
    nextTripleSlide();
}

function clickPrevTripleSlide() {
    clearInterval(autotripleSlider);
    prevTripleSlide();
}

function nextTripleSlide() {
    for (i = 0; i < countOfSlides; i++) {
        offset = offset + slideWidthArray[step] + remainderWidthArray[step];
        line.style.left = -offset + "px";
        step++;
    }
    if (step == 12) {
        paginationPosition = -1;
        step = 0;
        offset = 0;
        line.style.left = -offset + "px";
    }
    for (i = 0; i < numbers.length; i++) {
        numbers[i].innerHTML = `${i+1}`;
    }
    paginationPosition++;
    numbers[paginationPosition].innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>`;
    slideIndex.innerHTML = `${paginationPosition+1}`;
}


function prevTripleSlide() {
    if (step != 0) {


        for (i = 0; i < countOfSlides; i++) {
            offset = offset - slideWidthArray[step] - remainderWidthArray[step];
            line.style.left = -offset + "px";
            step--;
        }
        if (step == 12) {
            paginationPosition = -1;
            step = 0;
            offset = 0;
            line.style.left = -offset + "px";
        }
        for (i = 0; i < numbers.length; i++) {
            numbers[i].innerHTML = `${i+1}`;
        }
        paginationPosition--;
        numbers[paginationPosition].innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>`;
        slideIndex.innerHTML = `${paginationPosition+1}`;
    }
}

function currentTripleSlide(n) {
    clearInterval(autotripleSlider);
    for (i = 0; i < numbers.length; i++) {
        numbers[i].innerHTML = `${i+1}`;
    }

    event.target.innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>
    `;
    offset = 0;
    for (i = 0; i < n; i++) {
        offset = offset + slideWidthArray[i] + remainderWidthArray[i];
    }

    line.style.left = -offset + "px";

}



line.addEventListener('touchstart', handleTouchStart, false);
line.addEventListener('touchmove', handleTouchMove, false);
var xDown = null;
var yDown = null;

function getTouches(evt) {
    return evt.touches // чистый API JS
}

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
};

function handleTouchMove(evt) {
    if (!xDown || !yDown) {
        return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if (Math.abs(xDiff)) { /* отлавливаем разницу в движении */
        if (xDiff > 0) {
            clearInterval(autotripleSlider);
            nextTripleSlide(); /* swipe влево */
        }
        if (xDiff < 0) {
            clearInterval(autotripleSlider);
            prevTripleSlide(); /* swipe вправо */
        }
    }
    /* свайп был, обнуляем координаты */
    xDown = null;
    yDown = null;
};