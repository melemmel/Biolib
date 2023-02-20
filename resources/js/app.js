import './bootstrap';
// Get the loader element
const loader = document.querySelector('.loader');

// Show the loader
function showLoader() {
  loader.style.display = 'block';
}

// Hide the loader
function hideLoader() {
  loader.style.display = 'none';
}
