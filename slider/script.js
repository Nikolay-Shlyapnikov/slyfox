let position = 0;
const container = document.querySelector(".slider");
const track = document.querySelector(".slides");
const btnNext = document.querySelector(".next");
const btnPrev = document.querySelector(".prev");
let wWidth = document.body.clientWidth;
let movePosition = wWidth;
let positionForSecond = -wWidth;
let positionForThird = -2 * wWidth;
window.addEventListener(`resize`, event => {
    wWidth = document.body.clientWidth;
movePosition = wWidth;
positionForSecond = -wWidth;
positionForThird = -2 * wWidth;
}, false);
let pointerPosition = 1;
const setPosition = () => {
    track.style.transform = `translateX(${position}px)`;
    checkDots();
};

let autoSlider = setInterval(() => nextSlide(), 5000);


function checkDots() {
    if (position == 0) {
        pointerPosition = 1;
        document.querySelector('.first-slider-dot').innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
 			<path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="white"/>
 			</svg>
 `;
    }
    if (position == positionForSecond) {
        pointerPosition = 2;
        document.querySelector('.second-slider-dot').innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="white"/>
		  </svg>
		  `;
    }
    if (position == positionForThird) {
        pointerPosition = 3;
        document.querySelector('.third-slider-dot').innerHTML = `<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M0 0H9V11.1628L4.5 15L0 11.1628V0Z" fill="white"/>
		</svg>
		`;
    }
    if (pointerPosition != 1) {
        document.querySelector('.first-slider-dot').innerHTML = `1`;
    }

    if (pointerPosition != 2) {
        document.querySelector('.second-slider-dot').innerHTML = `2`;
    }
    if (pointerPosition != 3) {
        document.querySelector('.third-slider-dot').innerHTML = `3`;
    }
}

function currentSlide(AndPosition) {
    if (AndPosition == 1) {
        position = 0;
        setPosition();
        clearInterval(autoSlider);
    }
    if (AndPosition == 2) {
        position = positionForSecond;
        setPosition();
        clearInterval(autoSlider);
    }
    if (AndPosition == 3) {
        position = positionForThird;
        setPosition();
        clearInterval(autoSlider);
    }
}

function nextSlide() {
    position -= movePosition;
    setPosition();
    if (position == -3 * wWidth) {
        position += 3 * movePosition;
        setPosition();

    }
};


function prevSlide() {
    position += movePosition;
    clearInterval(autoSlider);
    setPosition();
    if (position == wWidth) {
        position -= 3 * movePosition;
        setPosition();
    }
};

container.addEventListener('touchstart', handleTouchStart, false);
container.addEventListener('touchmove', handleTouchMove, false);
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
            clearInterval(autoSlider);
            nextSlide(); /* swipe влево */
        }
        if (xDiff < 0) {
            clearInterval(autoSlider);
            prevSlide(); /* swipe вправо */
        }
    }
    /* свайп был, обнуляем координаты */
    xDown = null;
    yDown = null;
};