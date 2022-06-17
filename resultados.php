<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        echo"<script>alert('Você precisa estar logado para visualizar a página.')</script>";
        header('Location: ./index.php');
    }else {
       echo "logado com exito";
       print_r($_SESSION['username']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css"> 
    <link rel="stylesheet" href="./assets/css/resultados.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <script src="https://kit.fontawesome.com/2bdb557370.js" crossorigin="anonymous"></script>
    <title>Dê a Nota | Painel de Resultados</title>
</head>
<body>
    <div class="grid-container">
        <header class="cabecalho">
            <h1 class="cabecalho__titulo"><span>&#10004; </span>Dê a Nota</h1>
        </header>
        <nav class="menu-navegacao">
            <ul class="menu-navegacao__lista">
                    <li class="itens-lista ativo">
                       <a href="resultados.php"> <i class="fa-solid fa-chart-pie"></i> Resultados </a>
                    </li>
                    <li class="itens-lista">
                        <a href="equipes.php"><i class="fa-solid fa-chalkboard-user"></i> Equipes </a>
                    </li>
                    <li class="itens-lista">
                        <a href="jurados.php"><i class="fa-solid fa-list-check"></i> Jurados</a>
                    </li>            
            </ul>
        </nav> 

       
        <main class="container-principal">
            <button class="add-adm"><i class="fa-solid fa-circle-plus"></i> Adm </button>
            <section class="secao-cadastrarAdm">
                <h3 class="secao-cadastrar__titulo">Cadastrar Administrador<h3>
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


            <div class="seletor-resultado">
                <button class="botao-individual">INDIVIDUAL</button>
                <button class="botao-geral">GERAL</button>
            </div>

            <div class="container-principal_seletor-equipe">
                
                <form class="form-seletor-equipe">

                    <label for="seletor-equipe">Equipe</label>
                    <select name="seletor-equipe"class="seletor-equipe">
                        <option class="seletor-equipe_option" value="equipeA">
                           
                        </option>
                        <option class="seletor-equipe_option" value="equipeA">
                            Equipe A
                        </option>
                        <option class="seletor-equipe_option" value="equipeA">
                            Equipe A
                        </option>
                    </select>
                </form>
            </div>

            <section class="secao-resultados display-none">
                <table class="secao-resultados_tabela">
                    <tr class="tabela_linha-cabecalho">
                        <th>
                            Quezito
                        </th>
                        <th>
                            jurado1
                        </th>
                        <th>
                            jurado2
                        </th>
                        <th>
                            jurado3
                        </th>
                
                    </tr>

                    <tr>
                        <td>
                            Organização
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            6
                        </td>
                        <td>
                            9
                        </td>                
                    </tr>
                </table>
            </section>
              
            
            


        </main>

        <script src="./assets/js/resultados.js"></script>
        <footer class="rodape">

        </footer>
    </div>
</body>
</html>