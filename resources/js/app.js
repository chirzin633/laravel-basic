// import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById('menu-toggle')
    const menu = document.getElementById('menu')

    menuToggle.addEventListener("change", function () {
        menu.classList.toggle("hidden", !menuToggle.checked)
    })
})
