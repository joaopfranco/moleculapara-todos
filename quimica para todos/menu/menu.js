document.addEventListener("DOMContentLoaded", function () {
    fetch("/menu/menu.html")  // Caminho para o arquivo menu.html
        .then(response => response.text())
        .then(data => {
            document.body.insertAdjacentHTML("afterbegin", data); // Insere o menu no topo do <body>
            carregarMenu(); // Chama a função para ativar os eventos do menu
        })
        .catch(error => console.error("Erro ao carregar o menu:", error));
});

function carregarMenu() {
    const menuBtn = document.getElementById("menu-btn");
    const sidebar = document.querySelector(".sidebar");
    let overlay = document.querySelector(".overlay");

    if (!overlay) {
        overlay = document.createElement("div");
        overlay.classList.add("overlay");
        document.body.appendChild(overlay);
    }

    menuBtn.addEventListener("click", function () {
        sidebar.classList.toggle("active");
        overlay.classList.toggle("active");
    });

    overlay.addEventListener("click", function () {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");
    });
}
