
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/cadastro/cadastro.css">
    <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon">
    <title>Faça seu cadastro Professor</title>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="/imagens/logoCienciaParaTodos.png" alt="Ciência para Todos">
        </div>
    <div class="container">
        <div class="left-side">
        </div>
        <div class="right-side">
            <h1 class="form-title">Faça seu cadastro</h1>
            <form action="post" method="cadastroAlunoProf.php">
            
            <div class="form-group">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-input" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" required>
            </div>
            <div class="form-group password-container">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-input" id="password" required>
                <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
            </div>
        //colocar o link certo 
            <input type="submit" value='Criar Conta'>
            </form>
        </div>
    </div>
    <script src="cadastro.js"></script>
</body>
</html>
