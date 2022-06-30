
let campoSenha = document.querySelector('.input-senha');
let confSenha = document.querySelector('.input-confirma-senha');
let botaoCadastrar = document.querySelector('.botao-cadastrar');
let senhaNaoConfere = document.createElement('span');


/*ESCUTADOR DE EVENTOS NO CAMPO DE CONFIRMAÇÃO DE SENHA */

confSenha.addEventListener('input', function (e) {
    //TESTA SE O CAMPO DE CONFIMAÇÃO DE SENHA É IGUAL AO DE SENHA DURANTE A INSERÇÃO DO CAMPO DE CONFIRMAÇÃO
    if(campoSenha.value == confSenha.value) {
        botaoCadastrar.disabled = false;
    } else {
        botaoCadastrar.disabled = true;
    }
})

/*ESCUTADOR DE EVENTOS NO CAMPO DE  DE SENHA */
campoSenha.addEventListener('input', function (e) {

    //TESTA SE O CAMPO DE CONFIMAÇÃO DE SENHA É IGUAL AO DE SENHA DURANTE A INSERÇÃO DO CAMPO DE CONFIRMAÇÃO
    if(campoSenha.value == confSenha.value) {
        botaoCadastrar.disabled = false;
    } else {
        botaoCadastrar.disabled = true;
        senhaNaoConfere.textContent = "As senhas digitadas não são iguais."
    }
})