const navbar = document.querySelector("nav");
const navlink = navbar.querySelectorAll("a");

navlink.forEach((link) => {
    link.addEventListener("click", (event) => {
    event.preventDefault();
    const sectionId = link.getAttribute("href");
    navbar.style.display = "none";
    setTimeout(() => {
        navbar.style.display = "block";
        const section = document.querySelector(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: "smooth" });
        }
    }, 500);
  });
});

function modal(){
    var menuHamburger = document.getElementById("menu-hamburger")
    var buttonHamburger = document.getElementById("container-nav-bar")
    menuHamburger.style.display = "block";
    buttonHamburger.style.display = "none";

}
function hideHamburger(){
    var menuHamburger = document.getElementById("menu-hamburger")
    var buttonHamburger = document.getElementById("container-nav-bar")
    menuHamburger.style.display = "none";
    buttonHamburger.style.display = "grid";
}

function modalInfoProjet(){
    
}