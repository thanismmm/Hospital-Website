
// Cache the list, and the items
const list = document.querySelector('nav ul');
const links = list.querySelectorAll('a');


// Add one listener to the list element
list.addEventListener('click', handleClick);

// If the clicked element is a link remove all
// the active classes from the other links, and then
// add the active class to the link that was clicked on
function handleClick(e) {
  if (e.target.matches('a')) {
    links.forEach(link => link.classList.remove('active'));
    e.target.classList.add('active');
  }
}






document.getElementById("appoinment").addEventListener("click", function () {
  document.getElementById("reg-form-container").style.display = "flex";
});

document.getElementById("close-reg-form-btn").addEventListener("click", function () {
  document.getElementById("reg-form-container").style.display = "none";
  });

document.getElementById("reg-form").addEventListener("submit", function (event) {
  event.preventDefault();
    // Handle form submission here
  });

function openMenu() {
  const nav = document.querySelector("nav");
  nav.classList.toggle("open");
}
