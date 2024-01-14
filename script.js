document.getElementById("appoinment").addEventListener("click", function () {
  document.getElementById("reg-form-container").style.display = "flex";
});

document
  .getElementById("close-reg-form-btn")
  .addEventListener("click", function () {
    document.getElementById("reg-form-container").style.display = "none";
  });

document
  .getElementById("reg-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    // Handle form submission here
  });

function openMenu() {
  const nav = document.querySelector("nav");
  nav.classList.toggle("open");
}
