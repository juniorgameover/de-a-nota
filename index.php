

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Dê a Nota | home</title>
</head>
<body>
    <header class="cabecalho">
        <h1 class="cabecalho__titulo"><span>&#10004; </span>Dê a Nota</h1>
        <a href="#" class="cadastre-se">Cadastre-se</a>
        
    </header>

    <main class="container">
        <h2 class="titulo-login">Login</h2>

        <div class="janela-login">
                <form class="janela-login__form" method="POST" action="./app/autentica_bk.php">
                    <label for="usuario" class="label-usuario">Usuário</label>
                    <input type="text" class="input-usuario" name="usuario">
                    <label for="senha" class="label-senha">Senha</label>
                    <input type="password"  name="senha" class="input-senha">
                    <input class="botao-entrar" type="submit" name="entrar" value="Entrar">
                </form>
            
        </div>

    </main>
    <footer class="rodape">

    </footer>
    
</body>
</html>