<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do professor</title>
    <link rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;  /* FUNDO DA TELA */
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Coloca a imagem no topo */
        }
        .back-arrow {
            position: absolute; /* Posiciona a seta no canto superior esquerdo */
            top: 15px;
            left: 20px;
            font-size: 18px;
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            font-family: Arial, sans-serif;
        }

        .back-arrow:hover {
            color: #1d8649; /* Muda a cor ao passar o mouse */
        }
        .profile-pic {  /*EDITAR A IMAGEM*/
            border-radius: 50%;  /* Garante que a imagem seja redonda */
            width: 160px;
            height: 160px;
            object-fit: cover;
            margin: 250px auto 15px;  /* Aumente o valor de margin-top para descer mais a imagem */
            display: block;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        .profile-card { 
            background-color: #63BB7E;
            border-radius: 50px 50px 0 0;  /* Aplica bordas arredondadas apenas nas bordas superiores */
            width: 100%;  /* A caixa ocupa toda a largura disponível */
            padding: 20px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            text-align: left;
            color: rgb(0, 0, 0);
            font-size: 15px;
            font-weight: 600;
            font-family: Arial, Helvetica, sans-serif; /* CAIXA VERDE */
            min-height: 800px; /* Aumente a altura mínima conforme necessário */
            min-height: 800px;
            display: flex;
            justify-content: center; /* Centraliza o conteúdo dentro da área verde */
            align-items: center;
        }
        
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 96%; /* editar tamanho das caixas */
            padding: 10px;
            margin: 10px 0;
            border-radius: 9px;
            border: none;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            color: grey;
            background-color: #f0f0f0; /* Cor de fundo do campo */
        }
        h2 {
            text-align: center; /* Centraliza o título */
            color: #000000;
            margin-bottom: 20px;
        }
        .btn {
            background-color: white;  /* botao de alterar dados */
            color: #000000;
            border: none;
            font-weight: 500;
            padding: 10px;
            border-radius: 25px;
            cursor: pointer;
            width: 50%;
            display: block;
            margin: 20px auto 15px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #1d8649; 
            color: rgb(255, 255, 255);
        }

        .form-container {
            width: 92%; /*tamanho da caixa branca*/
            max-width: 400px; /* Limita a largura do conteúdo */
            text-align: left;
            margin-top: -380px; /* Move o conteúdo mais para cima */
        }

    </style>
</head>
<body>


    <!-- Imagem de Perfil - fora da área verde, acima do cartão -->   
    <img src="https://i.postimg.cc/ydCf91Fw/transferir-1.jpg" alt="Foto de Perfil" class="profile-pic">

     <h2>Olá, Saulo Bezerra!</h2>
    <!--  área verde -->
    <div class="profile-card">
    <!-- Container para centralizar o conteúdo -->
    <div class="form-container">
        <form>
            <label for="name">Nome</label>
            <input type="text" id="name" value="Saulo Bezerra" disabled>
            
            <label for="email">E-mail</label>
            <input type="email" id="email" value="saulo@example.com" disabled>
            
            <label for="password">Senha</label>
            <input type="password" id="password" value="******" disabled>
            
            <label for="phone">Telefone (opcional)</label>
            <input type="tel" id="phone" value="(99) 99999-9999" disabled>
            
            <button type="button" class="btn" id="editBtn">Alterar dados</button>
        </form>
    </div>
</div>


    <script>
        // Função para alternar a edição dos campos
        document.getElementById('editBtn').addEventListener('click', function() {
            const inputs = document.querySelectorAll('input');
            const isDisabled = inputs[0].disabled;

            // Alterna o estado de habilitação dos campos
            inputs.forEach(input => input.disabled = !isDisabled);

            // Altera o texto do botão
            if (isDisabled) {
                this.textContent = 'Salvar dados';
            } else {
                this.textContent = 'Alterar dados';
            }
        });
    </script>
</body>
</html>