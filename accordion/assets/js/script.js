const $accordions = document.querySelectorAll('.accordion');
let activeAccordion = [...$accordions].filter(e => e.classList.contains('is-active'))[0];

$accordions.forEach(e => {
	e.onclick = () => {
		activeAccordion.classList.remove('is-active');
		e.classList.add('is-active');
		activeAccordion = e;
	}
});