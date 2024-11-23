<?php
include_once('conexao.php');
session_start();

if (isset($_SESSION['tipo_sessao']) && $_SESSION['tipo_sessao'] === "Aluno") {
    header('Location: inicio.php');
    exit();
}

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}


$sql_alunos = 'SELECT * FROM usuarios ORDER BY tipo_usuario= "Aluno"';
$resultado_alunos = $conexao->query($sql_alunos);

?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <link rel="stylesheet" href="../css/gerenciar_aluno.css">
    <script src="../javascript/gerenciar_alunos.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body>
<header class="header">
        <div class="logo">MeuSite</div>
        <nav class="menu">
            <ul class="nav-list">
                <li><a href="glossario.php">Home</a></li>
                <li><a href="atividades.php">Sobre</a></li>
                <li><a href="enem.php">Teste</a></li>
                <li><a href="perfil.php">Teste2</a></li>
                <li><img id="logout" src="../img/sair.png" alt=""></li>
            </ul>
        </nav>
    </header>
    

    <main>
        <div id="container">
            <h1 id="title-gerenc">Gerenciar Usúarios</h1>
            <div class="tabela-div">
                <table>
                    <thead>
                        <tr>
                            <th>Nome do Aluno</th>
                            <th>Sobrenome</th>
                            <th>Tipo</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($resultado_alunos->num_rows > 0) {
                            while ($linha = $resultado_alunos->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $linha['nome_usuario'] . "</td>";
                                echo "<td>" . $linha['sobrenome_usuario'] . "</td>";
                                echo "<td>" . $linha['tipo_usuario'] . "</td>";
                                echo "<td>" . $linha['email_usuario'] . "</td>";
                                echo "<td><button class='editar' data-id='" . $linha['id_usuario'] . "', userNome='" . $linha['nome_usuario'] . "', userSobrenome='" . $linha['sobrenome_usuario'] . "', userEmail='" . $linha['email_usuario'] . "'>Editar</button> <button class='excluir' data-id='" . $linha['id_usuario'] . "'>Excluir</button></td>";
                                echo "</tr>";
                            }
                        } ?>

                    </tbody>
                </table>
            </div>
    </main>

    <footer class="footer">
        <a id="titulo" href="desenvolvedores.php" target="_blank">Equipe Desenvolvedora SoftDev</a>
        <a href="https://www.linkedin.com/in/kaiqueferreira0/" target="_blank">Kaique Bernardes Ferreira</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-gustavo-mota-ramos-9b60242a2/" target="_blank">João Gustavo Mota Ramos</a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-pedro-da-cunha-machado-2089482b7/" target="_blank">João Pedro da Cunha Machado</a>
        <a href="https://www.linkedin.com/in/murilo-silva-0377322b7/" target="_blank">Murilo Henrique Souza Silva</a>
        <a href="https://www.linkedin.com/in/yago-moraes-6a09b3326/" target="_blank">Yago Roberto Gomes Moraes</a>

        <h3 id="link">Links Úteis</h3>

        <a href="termosDeUso.php">Termos de Uso</a></li>
        <a href="politica_privacidade.php">Política de Privacidade</a></li>
        <a href="ajuda.php">Ajuda</a></li>
        <a href="faq.php">Perguntas Frequentes</a></li>


        <div class="footer-bottom">
            <p>&copy; 2024 História em Foco. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>