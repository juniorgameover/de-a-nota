<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Dê a Nota | cadastro</title>
</head>
<body>
    <header class="cabecalho">
       
            <h1  class="cabecalho__titulo"><a href="./index.php"><span>&#10004; </span>Dê a Nota</h1></a>
       
        
        
        
    </header>

    <main class="container">
        

        <h2 class="titulo-cadastro">Cadastre-se</h2>

       
                <form class="janela-cadastro__form" method="POST" action="./app/cadastro_bk.php">
                    <label for="nome-completo" class="label-nome-completo">Nome completo</label>
                    <input type="text" class="input-nome-completo" name="nome-completo" required>

                    <label for="username" class="label-username">Username</label>   
                    <input type="text"  name="username" class="input-username" required>

                    <label for="senha" class="label-senha">Senha</label>   
                    <input type="password"  name="senha" class="input-senha" required>

                    <label for="confirma-senha" class="label-confirma-senha">Confirmação da Senha</label>   
                    <input type="password"  name="confirma-senha" class="input-confirma-senha" required>

                    <label for="tipo-administrador" class="label-radio-adm">Administrador</label>
                    <input id="tipo-administrador" type="radio" name="tipo-usuario" value="administrador">

                    <label class="label-tipo-jurado" for="input-tipo-jurado" class="label-radio-jurado">Jurado</label>
                    <input checked id="input-tipo-jurado" type="radio" name="tipo-usuario" value="jurado">    

                    <label for="cod-autorizacao" class="label-cod-autorizacao">Código de Autorização</label>   
                    <input type="text" placeholder="código numérico que autoriza o cadastro" name="cod-autorizacao" class="input-cod-autorizacao" required>

                    <input  disabled class="botao-cadastrar" type="submit" name="entrar" value="Cadastrar">

                </form>
            
       

    </main>
    <footer class="rodape">

    </footer>
<script src="./assets/js/valida_form_cadastro.js"> 

</script>
</body>
</html>