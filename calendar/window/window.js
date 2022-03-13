const StartMonth = document.querySelector('.StartMonth__select');
const StartMonth_title = StartMonth.querySelector('.StartMonth__title');
const StartMonth_labels = StartMonth.querySelectorAll('.StartMonth__label');
const StartMonth_inputs = StartMonth.querySelectorAll('.StartMonth__input');


startDay31 = document.querySelector('.start_longday');

startFebDays = document.querySelectorAll('.start_februaryday');


stopDay31 = document.querySelector('.stop_longday');

stopFebDays = document.querySelectorAll('.stop_februaryday');

// Toggle menu
StartMonth_title.addEventListener('click', () => {
    if ('active' === StartMonth.getAttribute('data-state')) {
        StartMonth.setAttribute('data-state', '');
    } else {
        StartMonth.setAttribute('data-state', 'active');
    }
});

// Close when click to option
for (let i = 0; i < StartMonth_labels.length; i++) {
    StartMonth_labels[i].addEventListener('click', (evt) => {
        StartMonth_title.textContent = evt.target.textContent;
        clearInputs("StartMonth");
        StartMonth_inputs[i].setAttribute('checked', '')
        StartMonth.setAttribute('data-state', '');



        if (evt.target.classList.contains('start_shortmonth') == true) {

            startDay31.style.display = 'none';
        }
        if (evt.target.classList.contains('start_februarymonth') == true) {

            startFebDays[0].style.display = 'none';
            startFebDays[1].style.display = 'none';
            startFebDays[2].style.display = 'none';
        }
        if ((evt.target.classList.contains('start_februarymonth') == false) && (evt.target.classList.contains('start_shortmonth') == false)) {

            startDay31.style.display = 'flex';
            startFebDays[0].style.display = 'flex';
            startFebDays[1].style.display = 'flex';
            startFebDays[2].style.display = 'flex';
        }
    });
}


const StartDay = document.querySelector('.StartDay__select');
const StartDay_title = StartDay.querySelector('.StartDay__title');
const StartDay_labels = StartDay.querySelectorAll('.StartDay__label');
const StartDay_inputs = StartDay.querySelectorAll('.StartDay__input');

// Toggle menu
StartDay_title.addEventListener('click', () => {
    if ('active' === StartDay.getAttribute('data-state')) {
        StartDay.setAttribute('data-state', '');
    } else {
        StartDay.setAttribute('data-state', 'active');
    }
});

// Close when click to option
for (let i = 0; i < StartDay_labels.length; i++) {
    StartDay_labels[i].addEventListener('click', (evt) => {
        StartDay_title.textContent = evt.target.textContent;
        clearInputs("StartDay");
        StartDay_inputs[i].setAttribute('checked', '')
        StartDay.setAttribute('data-state', '');
    });
}
// Reset title


const StopMonth = document.querySelector('.StopMonth__select');
const StopMonth_title = StopMonth.querySelector('.StopMonth__title');
const StopMonth_labels = StopMonth.querySelectorAll('.StopMonth__label');
const StopMonth_inputs = StopMonth.querySelectorAll('.StopMonth__input');

// Toggle menu
StopMonth_title.addEventListener('click', () => {
    if ('active' === StopMonth.getAttribute('data-state')) {
        StopMonth.setAttribute('data-state', '');
    } else {
        StopMonth.setAttribute('data-state', 'active');
    }
});

// Close when click to option
for (let i = 0; i < StopMonth_labels.length; i++) {
    StopMonth_labels[i].addEventListener('click', (evt) => {
        StopMonth_title.textContent = evt.target.textContent;
        clearInputs("StopMonth");
        StopMonth_inputs[i].setAttribute('checked', '')
        StopMonth.setAttribute('data-state', '');

        if (evt.target.classList.contains('stop_shortmonth')) {

            stopDay31.style.display = 'none';
        }
        if (evt.target.classList.contains('stop_februarymonth')) {

            stopFebDays[0].style.display = 'none';
            stopFebDays[1].style.display = 'none';
            stopFebDays[2].style.display = 'none';
        }
        if ((evt.target.classList.contains('stop_februarymonth') == false) && (evt.target.classList.contains('stop_shortmonth') == false)) {

            stopDay31.style.display = 'flex';
            stopFebDays[0].style.display = 'flex';
            stopFebDays[1].style.display = 'flex';
            stopFebDays[2].style.display = 'flex';
        }
    });
}


const StopDay = document.querySelector('.StopDay__select');
const StopDay_title = StopDay.querySelector('.StopDay__title');
const StopDay_labels = StopDay.querySelectorAll('.StopDay__label');
const StopDay_inputs = StopDay.querySelectorAll('.StopDay__input');

// Toggle menu
StopDay_title.addEventListener('click', () => {
    if ('active' === StopDay.getAttribute('data-state')) {
        StopDay.setAttribute('data-state', '');
    } else {
        StopDay.setAttribute('data-state', 'active');
    }
});

// Close when click to option
for (let i = 0; i < StopDay_labels.length; i++) {
    StopDay_labels[i].addEventListener('click', (evt) => {
        StopDay_title.textContent = evt.target.textContent;
        clearInputs("StopDay");
        StopDay_inputs[i].setAttribute('checked', '')
        StopDay.setAttribute('data-state', '');
    });
}

function clearInputs(inputsName) {
    let clearedInputs = document.querySelectorAll(`input[name=${inputsName}]`);
    for (let i = 0; i < clearedInputs.length; i++) {
        clearedInputs[i].removeAttribute('checked')
    }
};


form = document.querySelector('.order__form');
form.addEventListener('click', (evt) => {

    if ((evt.target != StartDay_title) && (evt.target != StartMonth_title) && (evt.target != StopDay_title) && (evt.target != StopMonth_title)) {

        StartDay.setAttribute('data-state', '');
        StartMonth.setAttribute('data-state', '');
        StopDay.setAttribute('data-state', '');
        StopMonth.setAttribute('data-state', '');
    }
});



phone.onblur = function() {
    if (phone.value == '') { // неправильный номер
        this.classList.remove('valid');
        phone.classList.add('invalid');
        errorphone.innerHTML = 'Поле "Номер телефона" обязательно для заполнения';

    }
    if (errorphone.innerHTML == "") {
        this.classList.add('valid');
    }
};

phone.onfocus = function() {
    if (this.classList.contains('invalid')) {
        // удаляем индикатор ошибки, т.к. пользователь хочет ввести данные заново
        this.classList.remove('invalid');
        this.classList.remove('valid');
        errorphone.innerHTML = "";

    }
};
email.onblur = function() {
    if (!email.value.includes('@')) { // неправильный номер
        this.classList.remove('valid');
        email.classList.add('invalid');
        errormail.innerHTML = 'Пожалуйста, введите корректный e-mail'
    }
    if (errormail.innerHTML == "") {
        this.classList.add('valid');
    }
};

email.onfocus = function() {
    if (this.classList.contains('invalid')) {
        // удаляем индикатор ошибки, т.к. пользователь хочет ввести данные заново
        this.classList.remove('invalid');
        this.classList.remove('valid');
        errormail.innerHTML = "";
    }
};
Username.onblur = function() {
    if (Username.value == '') { // неправильный номер
        this.classList.remove('valid');
        Username.classList.add('invalid');
        errorname.innerHTML = 'Поле "Ваше имя" обязательно для заполнения'
    }
    if (errorname.innerHTML == "") {
        this.classList.add('valid');
    }
};
Username.onfocus = function() {
    if (this.classList.contains('invalid')) {
        // удаляем индикатор ошибки, т.к. пользователь хочет ввести данные заново
        this.classList.remove('invalid');
        this.classList.remove('valid');
        errorname.innerHTML = "";
    }
};