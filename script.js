//Регистрация на приём
const registationForm = document.getElementById('registationForm');
const buttons = document.getElementsByClassName('appointment-button');
const buttonMobile = document.getElementById('appointment-button-mobile');
const registationFormBackground = document.getElementById(
	'registration-form-background'
);
const registationButtonExit = document.getElementById(
	'turn-off-registration-button'
);

//слайдер
const rightArrow = document.getElementById('rightArrow');
const leftArrow = document.getElementById('leftArrow');
const checkups = document.getElementsByClassName('checkup-text-description');
const counter_amount = document.getElementById('slider_counter_amount');
let slider_counter = 1;

//бургер меню
const menu = document.querySelector('.menu');
const menuItems = document.querySelectorAll('.menu-item');
const hamburger = document.querySelector('.hamburger');
const closeIcon = document.querySelector('.closeIcon');
const menuIcon = document.querySelector('.menuIcon');

//Регистрация на приём
buttonMobile.addEventListener('click', () => {
	TurnOnForm();
});
for (let i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener('click', () => {
		TurnOnForm();
	});
}
registationButtonExit.addEventListener('click', () => {
	TurnOffForm();
});
function TurnOnForm() {
	registationForm.style.visibility = 'visible';
	registationFormBackground.style.visibility = 'visible';
}
function TurnOffForm() {
	registationForm.style.visibility = 'hidden';
	registationFormBackground.style.visibility = 'hidden';
}

//Слайдер
window.onload = funonload();
function funonload() {
	checkups[slider_counter - 1].style.visibility = 'visible';
}
rightArrow.addEventListener('click', () => {
	slider_counter++;
	if (slider_counter == 5) {
		slider_counter = 1;
	}
	for (let i = 0; i < checkups.length; i++) {
		if (i == slider_counter - 1) {
			checkups[i].style.visibility = 'visible';
		} else {
			checkups[i].style.visibility = 'hidden';
		}
	}
	counter_amount.textContent = slider_counter + '/4';
});
leftArrow.addEventListener('click', () => {
	slider_counter--;
	if (slider_counter == 0) {
		slider_counter = 4;
	}
	for (let i = 0; i < checkups.length; i++) {
		if (i == slider_counter - 1) {
			checkups[i].style.visibility = 'visible';
		} else {
			checkups[i].style.visibility = 'hidden';
		}
	}
	counter_amount.textContent = slider_counter + '/4';
});

//Бургер меню
function toggleMenu() {
	if (menu.classList.contains('showMenu')) {
		menu.classList.remove('showMenu');
		closeIcon.style.display = 'none';
		menuIcon.style.display = 'block';
	} else {
		menu.classList.add('showMenu');
		closeIcon.style.display = 'block';
		menuIcon.style.display = 'none';
	}
}

hamburger.addEventListener('click', toggleMenu);

menuItems.forEach(function (menuItem) {
	menuItem.addEventListener('click', toggleMenu);
});
