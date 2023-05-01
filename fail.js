const failHeader = document.querySelector('.header-with-fail-message');
if (screen.width <= 768) {
	failHeader.style.display = 'block';
	failHeader.style.position = 'fixed';
} else {
	failHeader.style.display = 'block';
}
