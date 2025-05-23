<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login - Professor</title>
    <link rel="stylesheet" href="profLogin.css">
    <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="/imagens/logoCienciaParaTodos.png" alt="Ciência para Todos">
        </div>
        <div class="login-container">
            <h2>Login Professor</h2>
            <form id="loginForm">
                <label for="email">Email</label>
                <input type="email" id="email" required>
                <div class="password-container">
                    Senha
                    <input type="password" id="password" required> 
                    <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
                </div>
                
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem conta? <a href="/cadastro/cadastro.php" class="cadastro">Cadastre-se</a></p>
        </div>
    </div>
    <script src="alunoProfLogin.js"></script>
</body>
</html>
