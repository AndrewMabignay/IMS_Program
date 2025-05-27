import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	const button = document.getElementById('inventory-button');
	const dropdown = document.querySelector('.inventory-list-container');

	button.addEventListener('click', () => {
		if (dropdown.style.display === 'block') {
			dropdown.style.display = 'none';
		} else {
			dropdown.style.display = 'block';
		}
	});
});
