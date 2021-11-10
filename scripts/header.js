// Variável que diz quando o menu está ativo
let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")

// Quando clicar no "menu-toggle" esconde o conteudo da página e abre o menu
menuToggle.addEventListener("click", () => {
    document.body.style.overflow = show ? "hidden" : "initial"

    menuSection.classList.toggle("on", show)
    show = !show;
})