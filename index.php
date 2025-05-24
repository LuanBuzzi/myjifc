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

.logo-container {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    color: white;
    text-shadow: 0 0 8px rgba(0,0,0,0.7);
    padding: 20px;
}

    </style>
</head>
<body>
<body>
    <div class="background-blur"></div>

    <div class="logo-container text-center">
        <img src="images/myjifc.png" height="250px" alt="Logo do MyJIFC">
    </div>

    <div class="content container text-center">
        <h1 class="mt-3">Bem-vindo ao MyJIFC</h1>
        <p>Seu sistema de inscrição de atletas</p>
        <a href="atividade/index.php" class="btn btn-primary mt-3">Inscreva-se como atleta</a>
    </div>
</body>
</body>
</html>
