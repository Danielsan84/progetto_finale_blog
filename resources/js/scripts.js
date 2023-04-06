let darkModeSwitch = document.getElementById("dark-mode-switch");
let body = document.body;

darkModeSwitch.addEventListener("change", () => {
  if (darkModeSwitch.checked) {
    body.classList.add("dark");
  } else {
    body.classList.remove("dark");
  }
});
