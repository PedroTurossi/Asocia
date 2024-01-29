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
                        <a href="#" class="nav-link active" aria-current="page" style="background: green">
                            Home
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link link-body-emphasis" style="color: green">
                            Diário
                        </a>
                    </li>
                    <li>
                        <a href="../ferramentas" class="nav-link link-body-emphasis" style="color: green">
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
                    <h3>Olá, seja bem vindo denovo!</h3>
                    <br>
                    <br>
                </div>

                <div class="a-post">
                    <h6 class="subtitl flodir">Ultima mensagem: <?php echo $ultimaData . " ás " . $ultimaHora; ?></h6>
                    <h4>Já conhece a nossa comunidade?</h4>
                    <p>A aba de comunidade tem a ideia de ser um suporte social, onde todos podem dividir suas experiencias em superar esse vício.</p>
                    <p>clique <a href="../comunidade/chat1/">aqui</a> para visitar!</p>
                </div>

                <?php
                    include "conteudo.php";
                ?>
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
 

    <div class="col-12 text-center" >
        <button id="botaoAbrir" style="z-index: 1;"><ion-icon name="add-circle"></ion-icon></button>

        <!-- Esse é o quadrado que vai aparecer -->
        <div id="quadradoInput" style="display: none;">

            <form action="inscontd.php" method="post">
                <div style="height: 80px;">

                    <input class="titlinput" type="text" name="titulo" placeholder="Titulo" autocomplete="off">
                </div>

                <div style="">
                    <textarea class="continput" rows="2" type="text" name="contd" placeholder="Digite o conteudo do seu post" autocomplete="off"></textarea>
                </div>

                <div style="display: flex; align-items: flex-end; justify-content: center; gap: 20px; margin-top: 5%;">

                    <button class="butnsub" type="submit" id="botaoSalvar" name="botaoSubmit" value="Salvar">Salvar</button>
            
              </form>


                    <button class="butnfec" id="botaoFechar" name="botaoFechar" value="Fechar">Fechar</button>
                </div>  
        
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    <!--importa o boostrap-->
<script src="script.js"></script>   <!--importa o script-->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</html>