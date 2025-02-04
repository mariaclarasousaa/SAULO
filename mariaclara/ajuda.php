<?php
// Configuração de conexão com o banco de dados
$servername = "localhost"; // Altere para seu servidor de banco de dados
$username = "root"; // Altere para seu usuário do banco de dados
$password = ""; // Altere para sua senha, caso tenha
$dbname = "nome_do_banco"; // Altere para o nome do seu banco de dados

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar dados de contato
$sql = "SELECT * FROM contatos WHERE id = 1"; // Substitua por sua consulta real
$result = $conn->query($sql);

// Se os dados de contato forem encontrados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email_suporte = $row['email_suporte'];
    $telefone_suporte = $row['telefone_suporte'];
    $site = $row['site'];
} else {
    // Valores padrão caso não encontre nenhum dado no banco
    $email_suporte = "suporte@jitsukaapp.com";  
    $telefone_suporte = "(88) 1234-5678";  
    $site = "https://www.jitsukaapp.com";  
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - App Jiujitsu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Cabeçalho */
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

        /* Estilos principais */
        .content {
            padding: 30px;
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .faq-section {
            margin-bottom: 40px;
        }

        .faq-section h2 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item h3 {
            font-size: 18px;
            margin: 0;
            color: #333;
        }

        .faq-item p {
            font-size: 16px;
            margin: 5px 0 15px;
            line-height: 1.5;
            color: #555;
        }

        /* Aviso importante para o professor */
        .teacher-note {
            background-color: #FFF3CD;
            border-left: 6px solid #FFEEBA;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 16px;
            color: #856404;
        }

        .contact-section {
            margin-top: 40px;
        }

        .contact-section h2 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .contact-item {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
        }

        .contact-item i {
            margin-right: 10px;
            color: #4CAF50;
        }

        .back-btn-footer {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 30px;
        }

        .back-btn-footer:hover {
            background-color: #388E3C;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho com botão de voltar -->
    <header>
        <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Voltar</a>
        <h1>Ajuda</h1>
    </header>

    <!-- Conteúdo principal -->
    <div class="content">
        <!-- Aviso para o professor -->
        <div class="teacher-note">
            <strong>Atenção:</strong> Esta seção é destinada apenas aos professores. Se você é aluno, não será possível acessar as funcionalidades descritas abaixo.
        </div>

        <!-- Seção de FAQs -->
        <div class="faq-section">
            <h2>Perguntas Frequentes para Professores</h2>
            <div class="faq-item">
                <h3>Como criar uma nova turma?</h3>
                <p>Para criar uma nova turma, vá até a aba de "TURMAS" e clique em "+". Você será direcionado 
                para tela de cadastro de turma, onde deverá colocar o nome da turma, informar o curso que você deseja ensinar, a data de emissão do curso e uma descrição (opcional) para a turma.</p>
            </div>
            <div class="faq-item">
                <h3>Como monitorar o progresso dos alunos?</h3>
                <p>Você pode monitorar o progresso dos alunos acessando a seção "Turma", onde poderá visualizar o desempenho deles nos treinos, o progresso nas técnicas e verificar as metas atingidas.</p>
            </div>
            <div class="faq-item">
                <h3>Como posso agendar aulas para os meus alunos?</h3>
                <p>Para agendar aulas, vá até a seção "Horários" e clique em "+". Escolha a data, hora e alunos que participarão. As aulas agendadas serão notificadas para os alunos automaticamente.</p>
            </div>
        </div>

        <!-- Seção de Contato -->
        <div class="contact-section">
            <h2>Contato e Suporte</h2>
            <div class="contact-item">
                <i class="fas fa-envelope"></i> Email de Suporte: <strong><?php echo $email_suporte; ?></strong>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i> Telefone de Suporte: <strong><?php echo $telefone_suporte; ?></strong>
            </div>
            <div class="contact-item">
                <i class="fas fa-globe"></i> Visite nosso site: <a href="<?php echo $site; ?>" target="_blank"><?php echo $site; ?></a>
            </div>
        </div>

        <!-- Botão de voltar ao site -->
        <a href="index.php" class="back-btn-footer">Voltar</a>
    </div>

</body>
</html>
