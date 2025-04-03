const menuBtn = document.getElementById("menu-btn");
const sidebar = document.querySelector(".sidebar");
const overlay = document.getElementById("overlay");

// Função para abrir e fechar o menu
menuBtn.addEventListener("click", function () {
    sidebar.classList.toggle("active");
    overlay.classList.toggle("active");
});

// Fechar o menu ao clicar fora dele
overlay.addEventListener("click", function () {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
});