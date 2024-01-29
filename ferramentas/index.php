<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> <!--importa o boostrap-->
        <link rel="icon" href="imagens/title4.png" type="../image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> <!--esses 4 ultimos são fontes do googlefonts-->

        <link rel="icon" href="../imagens/title4.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="style.css">   <!--importa o css-->

        <?php include "../functions.php" ?> <!--importa o php pra muda umas coisas com o usuario logado-->

    <title>Asocia</title>
</head>

<body>

                         <!--navbar superior-->
    <div class="col-12">
        <nav class="navbar bg-dark">
                <a href="#">
                    <img src="../imagens/Logo.png" class="esp1"  alt="Asocia" height="30px">
                </a>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            
                        <!--barra lateral-->
            <div class="sidebr no-scroll col-2">
                <ul class="nav nav-pills flex-column mb-auto">
                    <br>
                    <li class="nav-item">
                        <a href="../home/" class="nav-link link-body-emphasis  " aria-current="page" style="color: green">
                            Home
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link link-body-emphasis" style="color: green">
                            Diário
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link active" style="background: green">
                            Ferramentas
                        </a>
                    </li>
                    <li>
                        <a href="../comunidade/" class="nav-link link-body-emphasis" style="color: green">
                            Comunidade
                        </a>
                    </li>
                    <li>
                        <a href="../metas/" class="nav-link link-body-emphasis" style="color: green">
                            Metas
                        </a>
                    </li>
                </ul>

                <span style="position: absolute; bottom: 0px;"> <!--isso faz o usuario ficar na parte inferior da div-->
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: green">
                            <img src="../imagens/QUE.jpg" width="32" height="32" class="rounded-circle me-2">            <!-- imagem do usuário pra a gnt ainda mudar-->
                            <strong><?php echo $username ?></strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                            <li><a class="dropdown-item" href="#">Conta</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../">Sair</a></li>
                        </ul>
                    </div>
                    <br>
                </span>
            </div>

            <!--tela principal-->
            <div class="col main-t scrollable">

                <div class="a-post text-center amainp">
                    <h3>Ferramentas</h3>
                    <p>O Asocia está aqui também para te oferecer ferramentas básicas que podem lhe auxiliar</p>
                </div>

                <div class="a-post">
                    <h4>Pomodoro</h4>
                    <p>O metodo de Pomodoro é um dos mais famosos metodos de estudos, que funciona com 25 minutos de estudos, seguidos de 5 minutos de descanso.</p>
                    <div class="timer">
                        <div class="tmrct">
                            <svg class="timer-svg" width="200" height="200" viewBox="0 0 100 100">
                                <circle class="progress-ring-circle" cx="50" cy="50" r="40" fill="transparent" stroke-width="5"></circle>
                            </svg>
                            <h1 class="timer-text" id="timerDisplay">25:00</h1>
                        </div>
                        <br><button class="incpom" onclick="iniciarPomodoro()">Iniciar Pomodoro</button>
                        <button class="incpom" onclick="pausarTimer()" style="margin-top: 10px; background: gainsborro;">Pausar</button>
                    </div>
                    <audio src="somAlert.mp3" id="somAl"></audio>
                    
                </div>

            </div>



            <!--barra lateral direita pq sim-->
            <div class="col-2 dirbar no-scroll">
                <h3>Suas metas!</h3>
                <ur>
                    <?php 
                        include "../metasfunc.php"; 
                    ?>
                </ur>
            </div>
        </div>
        
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    <!--importa o boostrap-->
<script src="script.js"></script>   <!--importa o script-->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</html>