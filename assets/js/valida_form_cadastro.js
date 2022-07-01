
let campoSenha = document.querySelector('.input-senha');
let confSenha = document.querySelector('.input-confirma-senha');
let botaoCadastrar = document.querySelector('.botao-cadastrar');
let senhaNaoConfere = document.createElement('span');
let formulario = document.querySelector('.janela-cadastro__form');
let labelRadioAdm = document.querySelector('.label-radio-adm');



/*ESCUTADOR DE EVENTOS NO CAMPO DE CONFIRMAÇÃO DE SENHA */

confSenha.addEventListener('input', function (e) {
    //TESTA SE O CAMPO DE CONFIMAÇÃO DE SENHA É IGUAL AO DE SENHA DURANTE A INSERÇÃO DO CAMPO DE CONFIRMAÇÃO
    if(campoSenha.value == confSenha.value && confSenha.value != "") {
        botaoCadastrar.disabled = false;
        senhaNaoConfere.remove();
    } else {

        if(campoSenha.value.length > 0 && confSenha.value.length > 0){
          botaoCadastrar.disabled = true;
        senhaNaoConfere.textContent = "As senhas digitadas não são iguais.";
        senhaNaoConfere.className = 'senha-nao-confere';
        formulario.insertBefore(senhaNaoConfere, labelRadioAdm);  
        }   
    }
})

/*ESCUTADOR DE EVENTOS NO CAMPO DE  DE SENHA */
campoSenha.addEventListener('input', function (e) {

    //TESTA SE O CAMPO DE CONFIMAÇÃO DE SENHA É IGUAL AO DE SENHA DURANTE A INSERÇÃO DO CAMPO DE CONFIRMAÇÃO
    if(campoSenha.value == confSenha.value && campoSenha != "") {
        botaoCadastrar.disabled = false;
        senhaNaoConfere.remove();

    } else {
        botaoCadastrar.disabled = true;
        if(campoSenha.value.length > 0 && confSenha.value.length > 0){
            senhaNaoConfere.textContent = "As senhas digitadas não são iguais.";
            senhaNaoConfere.className = 'senha-nao-confere';
            formulario.insertBefore(senhaNaoConfere, labelRadioAdm);
        } 
    }
})