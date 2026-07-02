<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login | Easy Peasy</title>
    <style>
        body {
            background: linear-gradient(90deg, #f4a3c0, #f7d8b6);
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .caixa {
            background: #ffffffd9;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            width: 320px;
            text-align: center;
        }

        h2 {
            color: #b90066;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            border-radius: 10px;
            border: 1px solid #d7a6bf;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #d92786;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #b11d6e;
        }

        .link {
            font-size: 14px;
            color: #8a1350;
            cursor: pointer;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="caixa">
    <h2>Bem-vindo 🌸</h2>

    <!-- Login -->
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Seu email" required>
        <input type="password" name="senha" placeholder="Sua senha" required>

        <button type="submit" name="login">Entrar</button>
    </form>

    <p class="link" onclick="document.getElementById('cadastro').style.display='block'">Criar conta</p>
</div>


<!-- Formulário de cadastro (aparece quando clicar) -->
<div class="caixa" id="cadastro" style="display:none;">
    <h2>Crie sua conta 🌼</h2>

    <form method="POST" action="">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu email" required>
        <input type="password" name="senha" placeholder="Crie uma senha" required>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
</div>


<?php
// ----- PROCESSAMENTO PHP (simples, para iniciar) -----

if(isset($_POST['login'])){
    // pegar dados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<script>alert('Login enviado (ainda não ligado ao banco).');</script>";
}

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<script>alert('Cadastro enviado (depois vamos salvar no banco).');</script>";
}
?>

</body>
</html>
