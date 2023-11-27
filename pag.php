<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background: linear-gradient(45deg, #f59797, #99b1ff, #aff7af);
            background-size: 200% 200%;
            height: 100vh;
            animation: gradientAnimation 5s infinite;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .welcome-text {
            color: white;
            font-size: 24px;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: #ffffff;
            color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #ccc;
        }

        .botao{
            gap: 40px;
        }

    </style>
</head>
<body>
    <div class="welcome-text">
        <?php
            echo "<h1>Seja bem-vindo, $logado!</h1>"
        ?>
       <div class="botao"> 
    <a href="index.html" class="logout-button">Ir à homepage</a>
    <a href="sair.php" class="logout-button">Sair</a>
    </div></div>

</body>
</html>
