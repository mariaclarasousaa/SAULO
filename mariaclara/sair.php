<?php
// Inicia a sessão
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair - App Jiujitsu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .back-btn {
            font-size: 18px;
            color: white;
            text-decoration: none;
        }

        .back-btn i {
            margin-right: 8px;
        }

        header h1 {
            margin: 0;
            font-size: 18px;
            text-align: center;
            flex-grow: 1;
        }

        .content {
            padding: 30px;
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content h2 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-confirm, .btn-cancel {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            width: 150px;
        }

        .btn-confirm:hover {
            background-color: #388E3C;
        }

        .btn-cancel {
            background-color: #FF5722;
        }

        .btn-cancel:hover {
            background-color: #E64A19;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho com botão de voltar -->
    <header>
        <h1>Confirmar Saída</h1>
    </header>

    <!-- Conteúdo principal -->
    <div class="content">
        <h2>Tem certeza que deseja sair?</h2>
        <p>Ao sair do aplicativo, você será desconectado da sua conta. Se desejar, poderá se reconectar a qualquer momento.</p>

        <!-- Botões de confirmação -->
        <div class="button-container">
            <!-- O link agora chama o logout.php para efetuar o logout -->
            <a href="logout.php" class="btn-confirm">Confirmar</a>
            <!-- O link de cancelar redireciona para a página de configurações -->
            <a href="config.html" class="btn-cancel">Cancelar</a>
        </div>
    </div>

</body>
</html>
