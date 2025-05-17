<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-center">Cadastre-se</h2>
    
    <form action="salvar.php" method="post" class="mt-4">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
