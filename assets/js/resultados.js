let btnAddAdm = document.querySelector(".add-adm");
let formCadAdm = document.querySelector(".secao-cadastrarAdm");

btnAddAdm.onclick = function () {
    formCadAdm.classList.toggle("mostra-form");
}

/*------------------------------------------------------------*/ 
/*Deixar selecionado o botão individual ao carregar a página*/

let botaoIndividual = document.querySelector('.botao-individual');
let botaoGeral = document.querySelector('.botao-geral');
let containerSelEquipe = document.querySelector('.container-principal_seletor-equipe');
let secaoResultados = document.querySelector(".secao-resultados");

document.onload = botaoIndividual.classList.add('seletor-resultado--ativo');


/* os dois eventos abaixo mudam a cor dos botes individual e geral ao serem clicados
    exibe e esconde o formulário seletor de equipes individual
*/
botaoGeral.addEventListener('click', function (){
    let corBotaoInd = getComputedStyle(botaoIndividual).backgroundColor;
    if(corBotaoInd){
        botaoGeral.style.backgroundColor = 'rgb(255, 234, 73)';
        botaoIndividual.style.backgroundColor = 'buttonface';
        containerSelEquipe.classList.add('display-none');
    }
  secaoResultados.classList.remove('display-none');
});

botaoIndividual.addEventListener('click', function (){
    botaoIndividual.style.backgroundColor = 'rgb(255, 234, 73)';
    botaoGeral.style.backgroundColor = 'buttonface';
    containerSelEquipe.classList.remove('display-none');
    secaoResultados.classList.add('display-none');
});
/*---------------------------------------------------------------------*/
/*Adicionando um evento de change no select para que mostre a tabela ao selecionar a equipe */

let seletorEquipe = document.querySelector('.seletor-equipe');
seletorEquipe.addEventListener("change", function () {
    secaoResultados.classList.remove('display-none');
})



