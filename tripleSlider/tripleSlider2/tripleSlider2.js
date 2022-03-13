let line2 = document.querySelector('.triple-slider2__track');
let tripleSlides2 = document.querySelectorAll('.slide__block2');
let slideWidthArray2 = [];
let remainderWidthArray2 = [];
let indent2 = document.querySelectorAll('.remainder2');
let offset2 = 0;
let step2 = 0;
let slideIndex2 = document.querySelector('.triple-slider2__index');
let numbers2 = document.querySelectorAll('.number-slide-black2');

for (i = 0; i < indent2.length; i++) {

    remainderWidthArray2.push(indent2[i].offsetWidth);
}

for (i = 0; i < tripleSlides2.length; i++) {

    slideWidthArray2.push(tripleSlides2[i].offsetWidth);
}
slideWidthArray2[0] = slideWidthArray2[0];

let autotripleSlider2 = setInterval(() => nextTripleSlide2(), 5000);
paginationPosition2 = 0;

function clickNextTripleSlide2() {
    clearInterval(autotripleSlider2);
    nextTripleSlide2();
}

function clickPrevTripleSlide2() {
    clearInterval(autotripleSlider2);
    prevTripleSlide2();
}

function nextTripleSlide2() {
    for (i = 0; i < countOfSlides; i++) {
        offset2 = offset2 + slideWidthArray2[step2] + remainderWidthArray2[step2];
        line2.style.left = -offset2 + "px";
        step2++;
    }
    if (step2 == 12) {
        paginationPosition2 = -1;
        step2 = 0;
        offset2 = 0;
        line2.style.left = -offset2 + "px";
    }
    for (i = 0; i < numbers2.length; i++) {
        numbers2[i].innerHTML = `${i+1}`;
    }
    paginationPosition2++;
    numbers2[paginationPosition2].innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>`;
    slideIndex2.innerHTML = `${paginationPosition2+1}`;
}


function prevTripleSlide2() {
    if (step2 != 0) {


        for (i = 0; i < countOfSlides; i++) {
            offset2 = offset2 - slideWidthArray2[step2] - remainderWidthArray2[step2];
            line2.style.left = -offset2 + "px";
            step2--;
        }
        if (step2 == 12) {
            paginationPosition2 = -1;
            step2 = 0;
            offset2 = 0;
            line.style.left = -offset2 + "px";
        }
        for (i = 0; i < numbers2.length; i++) {
            numbers2[i].innerHTML = `${i+1}`;
        }
        paginationPosition2--;
        numbers2[paginationPosition2].innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>`;
        slideIndex2.innerHTML = `${paginationPosition2+1}`;
    }
}

function currentTripleSlide(n) {
    clearInterval(autotripleSlider2);
    for (i = 0; i < numbers2.length; i++) {
        numbers2[i].innerHTML = `${i+1}`;
    }

    event.target.innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="#212121"/>
    </svg>
    `;
    offset2 = 0;
    for (i = 0; i < n; i++) {
        offset2 = offset2 + slideWidthArray2[i] + remainderWidthArray2[i];
    }

    line2.style.left = -offset2 + "px";

}



line2.addEventListener('touchstart', handleTouchStart, false);
line2.addEventListener('touchmove', handleTouchMove, false);
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
            clearInterval(autotripleSlider2);
            nextTripleSlide2(); /* swipe влево */
        }
        if (xDiff < 0) {
            clearInterval(autotripleSlider2);
            prevTripleSlide2(); /* swipe вправо */
        }
    }
    /* свайп был, обнуляем координаты */
    xDown = null;
    yDown = null;
};