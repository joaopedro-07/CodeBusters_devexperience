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
                <li><a href="inicio.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="planos.php">Planos de Treino</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container">
    <div class="card-grid">
      <!-- Card 1 -->
      <div class="card">
        <h2>Plano A</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Corrida: 15 minutos
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Supino reto: 4 séries de 10
            </label>
          </li>
        </ul>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <h2>Plano B</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Flexão de braço: 3 séries
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Abdominal: 4 séries de 15
            </label>
          </li>
        </ul>
      </div>
      <!-- Card 3 -->
      <div class="card">
        <h2>Plano C</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Agachamento livre: 3 séries de 12
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Prancha: 3 séries de 1 min
            </label>
          </li>
        </ul>
      </div>
      <!-- Card 4 -->
      <div class="card">
        <h2>Plano D</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Subida no banco: 4 séries de 10
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Remada curvada: 3 séries de 10
            </label>
          </li>
        </ul>
      </div>
      <!-- Card 5 -->
      <div class="card">
        <h2>Plano E</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Bicicleta: 20 minutos
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Levantamento terra: 4 séries de 8
            </label>
          </li>
        </ul>
      </div>
      <!-- Card 6 -->
      <div class="card">
        <h2>Plano F</h2>
        <ul class="exercise-list">
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Pull-up: 3 séries de 8
            </label>
          </li>
          <li class="exercise">
            <label>
              <input type="checkbox" class="exercise-check">
              Extensão de tríceps: 3 séries de 12
            </label>
          </li>
        </ul>
      </div>
    </div>
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
