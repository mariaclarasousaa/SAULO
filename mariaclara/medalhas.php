<?php
// Array de dados com as pessoas e a quantidade de medalhas
$alunos = [
    "Turma 01" => [
        ["nome" => "Isabelly dos Santos Baia", "medalhas" => 4, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Ítala Lima Correia", "medalhas" => 3, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "itala.html"],
        ["nome" => "Felipe Sousa", "medalhas" => 3, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Jhoyce Alcântara de Macêdo", "medalhas" => 2, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Maria Clara Araujo de Sousa", "medalhas" => 4, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Ana Sofia Carvalho Alves", "medalhas" => 3, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Lucas Pedro Furtado", "medalhas" => 2, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Beatriz Ribeiro Lima", "medalhas" => 2, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"],
        ["nome" => "Fernando José Rodrigues Santos", "medalhas" => 2, "foto" => "https://i.postimg.cc/J75JTsd9/do-utilizador.png", "link" => "#"]
    ],
    // Você pode adicionar mais turmas aqui, se necessário
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medalhas - Turma 01</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #63BB7E;
    }
    .back-arrow {
        position: absolute;
        top: 15px;
        left: 20px;
        font-size: 18px;
        text-decoration: none;
        color: #000000;
        font-weight: bold;
    }

    .back-arrow:hover {
        color: #1d8649;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      color: rgb(0, 0, 0);
      border-radius: 8px 8px 0 0;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
    }

    .dropdown {
      margin-top: 20px;
      text-align: left;
      font-size: 20px;
      margin-left: 20px;
    }

    .dropdown select {
        padding: 8px 12px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        background: none;
        color: #000;
    }

    .list {
        margin-top: 20px;
        background: white;
        border-radius: 40px 40px 0 0;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        min-height: 800px;
    }

    .list-item {
      display: flex;
      align-items: center;
      padding: 16px;
      border-bottom: 1px solid #f0f0f0;
    }

    .list-item:last-child {
      border-bottom: none;
    }

    .list-item img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .name-box {
      background-color: #F2F2F2;
      padding: 8px 12px;
      border-radius: 7px;
      text-align: left;
      font-weight: bold;
      color: #726060;
      width: 100%;
      box-sizing: border-box;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .medal {
      background-color: #58b16eb4;
      padding: 5px 10px;
      border-radius: 12px;
      color: black;
      font-weight: bold;
      font-size: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header .icon {
        width: 24px;
        height: 24px;
    }
  </style>
</head>
<body>
  
    <div class="header">
        <h1 class="title">Medalhas</h1>
    </div>

    <div class="dropdown">
      <label for="turma"></label>
      <select id="turma">
        <option>Turma 01</option>
        <option>Turma 02</option>
        <option>Turma 03</option>
        <option>Turma 04</option>
      </select>
    </div>

    <div class="list">
        <?php
        // Exibe os alunos da Turma 01
        foreach ($alunos['Turma 01'] as $aluno) {
            echo '<div class="list-item">
                    <img src="' . $aluno['foto'] . '" alt="Foto">
                    <div class="name-box">
                        <a href="' . $aluno['link'] . '" style="text-decoration: none; color: inherit;">' . $aluno['nome'] . '</a>
                        <span class="medal">' . $aluno['medalhas'] . '</span>
                    </div>
                  </div>';
        }
        ?>
    </div>

</body>
</html>
