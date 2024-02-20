menu = document.querySelector(".menu");
xmark = document.querySelector(".xmark");
linksParent = document.querySelector(".links");
links = document.querySelectorAll(".links a");

menu.addEventListener("click", () => {
    linksParent.classList.toggle("hidden");
});
xmark.addEventListener("click", () => {
    linksParent.classList.toggle("hidden");
});
links.forEach((link) => {
    link.addEventListener("click", () => {
        console.log(linksParent)
    });
});