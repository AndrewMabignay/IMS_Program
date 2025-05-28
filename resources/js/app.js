import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	const inventoryButton = document.getElementById('inventory-button');
	const inventoryDropdown = document.querySelector('.inventory-list-container');

	inventoryButton.addEventListener('click', () => {
		if (inventoryDropdown.style.display === 'block') {
			inventoryDropdown.style.display = 'none';
		} else {
			inventoryDropdown.style.display = 'block';
		}
	});
});
