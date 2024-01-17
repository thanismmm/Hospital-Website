
// document.getElementById("appoinment").addEventListener("click", function () {
//   document.getElementById("reg-form-container").style.display = "flex";
// });

// document.getElementById("reg-form").addEventListener("submit", function (event) {
//   event.preventDefault();
// });

// document.getElementsByClassName("closebtn").addEventListener("click", function () {
//   document.getElementById("reg-form-container").style.display = "none";
// });

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


function openMenu() {
  const nav = document.querySelector("nav");
  nav.classList.toggle("open");
}
