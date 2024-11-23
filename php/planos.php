<?php
include_once('conexao.php');
session_start();

if (!isset($_SESSION['nome_sessao'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicio.css">
    <script src="../js/inicio.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Correção do link do FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Área de Aluno</title>
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
    <main class="container">
    <section class="workout-plan">
      <h2>Seus Exercícios</h2>
      <ul class="exercise-list">
        <li class="exercise">
          <label>
            <input type="checkbox" class="exercise-check">
            Aquecimento: 10 minutos de corrida leve
          </label>
        </li>
        <li class="exercise">
          <label>
            <input type="checkbox" class="exercise-check">
            Supino reto: 3 séries de 12 repetições
          </label>
        </li>
        <li class="exercise">
          <label>
            <input type="checkbox" class="exercise-check">
            Agachamento livre: 4 séries de 10 repetições
          </label>
        </li>
        <li class="exercise">
          <label>
            <input type="checkbox" class="exercise-check">
            Flexão de braço: 3 séries até a falha
          </label>
        </li>
      </ul>
    </section>
  </main>
    </main>
    <footer>
        <div class="footer-logo">
            Meu Site
        </div>

        <ul class="footer-links">
            <li><a href="sobre.php">Sobre nós</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="politica_privacidade.php">Política de Privacidade</a></li>
            <li><a href="termos.php">Termos de Uso</a></li>
        </ul>


        <div class="footer-socials">
            <a href="#" class="social-facebook" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-twitter" title="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-instagram" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-linkedin" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <div class="footer-text">
            <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
