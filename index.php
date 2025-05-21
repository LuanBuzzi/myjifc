<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyJIFC - Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        .background-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url('https://ifc.edu.br/wp-content/uploads/2023/07/foto-oficial-scaled.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 0 0 8px rgba(0,0,0,0.7);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="background-blur"></div>

    <div class="content container text-center">
        <img src="images/myjifc.png" height="300px" alt="Logo do MyJIFC">
        <h1 class="mt-5">Bem-vindo ao MyJIFC</h1>
        <p>Seu sistema de inscrição de atletas</p>
        <a href="atividade/index.php" class="btn btn-primary mt-3">Inscreva-se como atleta</a>
    </div>
</body>
</html>
