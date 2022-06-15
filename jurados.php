<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/jurados.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <script src="https://kit.fontawesome.com/2bdb557370.js" crossorigin="anonymous"></script>
    <title>Dê a Nota | Painel Administrador</title>
</head>
<body>
    <div class="grid-container">
        <header class="cabecalho">
            <h1 class="cabecalho__titulo"><span>&#10004; </span>Dê a Nota</h1>
        </header>
        <nav class="menu-navegacao">
            <ul class="menu-navegacao__lista">
                    <li class="itens-lista ">
                       <a href="resultados.php"> <i class="fa-solid fa-chart-pie"></i> Resultados </a>
                    </li>
                    <li class="itens-lista">
                        <a href="equipes.php"><i class="fa-solid fa-chalkboard-user"></i> Equipes </a>
                    </li>
                    <li class="itens-lista ativo">
                        <a href="jurados.php"><i class="fa-solid fa-list-check"></i> Jurados</a>
                    </li>            
            </ul>
        </nav> 
    

       
        <main class="container-principal">
            <button class="add-jurado"><i class="fa-solid fa-circle-plus"></i> Jurado</button>
            <section class="secao-cadastrarJurado">
                <h3 class="secao-cadastrar__titulo">Cadastrar Jurado<h3>
                <form class="form-cadastrar" method="POST" action="#">
                    <label for="usuario" class="label-usuario">Usuário</label>
                    <input type="text" class="input-usuario" name="usuario">
                    <label for="senha" class="label-senha">Senha</label>
                    <input type="password"  name="senha" class="input-senha">
                    <label for="conf_senha" class="label-senha">Confirmar senha</label>
                    <input type="password"  name="conf_senha" class="input-senha">
                    <input class="botao-cadastrar" type="submit" name="botao_entrar" value="Cadastrar">
                </form>
            </section>


           
        </main>

    
        <footer class="rodape">

        </footer>
    </div>
    <script src="./assets/js/jurados.js"></script>
</body>
</html>