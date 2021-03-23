import tailwindcss from "./css/tailwind.css"

const header = document.querySelector("header")
const wpAdminBar = document.querySelector("#wpadminbar")
const headerMenu = document.querySelector("#header-menu")

document.getElementById("header-nav-button").addEventListener("click", function () {
    headerMenu.classList.toggle("hidden")
})

document.addEventListener("scroll", function (e) {
    if (document.scrollingElement.scrollTop > (header.getBoundingClientRect().height + (wpAdminBar?.getBoundingClientRect().height || 0))) {
        header.classList.add("sticky-header")
        header.style.top = (wpAdminBar?.getBoundingClientRect().height || 0) + "px"
    } else {
        header.classList.remove("sticky-header")
        header.style.top = "-100%"
    }
}, {passive: true})