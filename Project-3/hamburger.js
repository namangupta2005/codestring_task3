setTimeout(() => {
  const loader = document.getElementById("loader");
  loader.style.display = "none";
  let body = document.body;
  body.style.overflow = "visible";
}, 2000);

let hamburger = document.getElementById("hamburger-id");
let menu = document.querySelector("#menu-id ul");
let layers = document.querySelectorAll(".hamburger span");
hamburger.addEventListener("click", () => {
  layers.forEach((layers) => {
    layers.classList.toggle("active");
  });
  menu.classList.toggle("margin");
});
