let botaoAdJurado = document.querySelector(".add-jurado");
let secaoCadastro = document.querySelector(".secao-cadastrarJurado");

botaoAdJurado.onclick = function ()  {
    secaoCadastro.classList.toggle("mostra-form");
}