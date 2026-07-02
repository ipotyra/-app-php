<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Peasy</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .hero {
            background: linear-gradient(90deg, #f4a3c0, #f7d8b6);
            padding: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .hero h1 {
            font-size: 40px;
            color: #b90066;
            margin: 0;
        }

        .hero .texto {
            max-width: 400px;
            text-align: right;
        }

        .hero .texto p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #8a1350;
        }

        .hero button {
            background-color: #d92786;
            border: none;
            padding: 10px 28px;
            border-radius: 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .hero button:hover {
            background-color: #b11d6e;
        }

        .imagens { 
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 30px;
            flex-wrap: wrap;
        }

        .imagens img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>EASY<br>PEASY</h1>

        <div class="texto">
            <p>Sua ajuda diária para manter as tarefas de casa em dia,
            sem esforço e com mais facilidade.</p>

            <a href="login.php">
                <button>vamos juntos?</button>
            </a>


        </div>
    </div>

    <div class="imagens">
        <a href="quarto.php"><img src="imagens/quarto.jpg"></a>
        <a href="banheiro.php"><img src="imagens/banheiro.jpg"></a>
        <a href="cozinha.php"><img src="imagens/cozinha.jpg"></a>
        <a href="sala.php"><img src="imagens/sala.jpg"></a>
    </div>

</body>
</html>
