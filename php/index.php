<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cadastro
    if (isset($_POST['nome_usuario']) && isset($_POST['email_usuario']) && isset($_POST['senha_usuario'])) {

        $nome_usuario_digitado = $_POST['nome_usuario'];
        $email_usuario_digitado = $_POST['email_usuario'];
        $senha_usuario_digitado = md5($_POST['senha_usuario']); 

        $sql1 = "INSERT INTO usuarios(nome_usuario, email_usuario, senha_usuario) VALUES(?, ?, ?)";
        $stmt1 = $conexao->prepare($sql1);
        $stmt1->bind_param('sss', $nome_usuario_digitado, $email_usuario_digitado, $senha_usuario_digitado);
        $stmt1->execute();

        $cadastro_sucesso = true; 
    }

    // Login
    if (isset($_POST['email_login']) && isset($_POST['senha_login'])) {

        $email_login_digitado = $_POST['email_login'];
        $senha_login_digitado = md5($_POST['senha_login']); 

        $sql2 = "SELECT * FROM usuarios WHERE email_usuario = ? AND senha_usuario = ?";
        $stmt2 = $conexao->prepare($sql2);
        $stmt2->bind_param("ss", $email_login_digitado, $senha_login_digitado);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if ($result2->num_rows == 1) {
            $usuario_logado = $result2->fetch_assoc();
            $_SESSION['nome_sessao'] = $usuario_logado['nome_usuario'];
            $_SESSION['id_sessao'] = $usuario_logado['id_usuario'];
            header('location: inicio.php');
            exit();
        } else {
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/login.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body>
    <main>
        <div id="container">
            <!-- Formulário de Login -->
            <form action="" method="POST" id="login" class="active-form">
                <h1>ENTRAR</h1>
                <label for="email_login">Email</label>
                <input type="email" name="email_login" id="email_login" required placeholder="@email.com">

                <label for="senha_login">Senha</label>
                <input type="password" name="senha_login" id="senha_login" required placeholder="******">

                <a id="esqueci-senha" href="esqueciSenha.php">Esqueci a Senha</a>

                <button type="submit">Entrar</button>
                
                <div class="criar-conta">
                    <p>Não tem uma conta? <a id="criar-conta" href="javascript:void(0);" onclick="toggleForms()">Criar uma conta</a></p>
                </div>
            </form>

            <!-- Formulário de Cadastro -->
            <form action="" method="POST" id="cadastrar">
                <button type="button" id="voltar" onclick="toggleForms()">Voltar</button>
                <h1>Crie sua conta</h1>

                <label for="nome_usuario">Nome</label>
                <input type="text" name="nome_usuario" id="nome_usuario" required>

                <label for="email_usuario">Email</label>
                <input type="email" name="email_usuario" id="email_usuario" required placeholder="@email.com">

                <label for="senha_usuario">Criar Senha <p id="senha_mensagem"></p> </label>
                <input type="password" name="senha_usuario" id="senha_usuario" required placeholder="******">

                <button type="submit">Criar Conta</button>
            </form>
        </div>
    </main>
    
    <script>
        // Alternância de formulários
        function toggleForms() {
            const loginForm = document.getElementById('login');
            const cadastroForm = document.getElementById('cadastrar');

            loginForm.classList.toggle('active-form');
            cadastroForm.classList.toggle('active-form');
        }

        <?php if (isset($cadastro_sucesso) && $cadastro_sucesso): ?>
            Swal.fire({
                icon: 'success',
                title: 'Usuário cadastrado com sucesso!',
                text: 'Você será redirecionado para a página de login.',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php"; 
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>