<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/HomePage.css">
    <link rel="stylesheet" href="../../public/css/cssheader.css">
    <link rel="stylesheet" href="../../public/css/cssfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="../../public/imgs/ESCUDO COPA DAS PANELAS.png" type="image/x-icon">    
    <title>Copa das Panelas</title>
</head>
<body>
    <?php include 'header.php';
        include '../config/conexao.php';
        $noticias = $conn->query("SELECT * FROM noticias ORDER BY data_adicao DESC LIMIT 4");
        $endDate = new DateTime();
        $endDate->modify('+6 days');
        $endTimestamp = $endDate->getTimestamp();
    ?>
    <div class="menu-container">
        <button class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <nav id="nav-menu">
        <ul>
            <li><a href="../pages/HomePage.php">Home</a></li>

            <!--<li>
                <a href="">Cadastros ▾</a>
                <ul class="dropdown">
                    <li><a href="">Times</a></li>
                    <li><a href="">Jogadores</a></li>
                    <li><a href="">Info C</a></li>
                    <li><a href="">Info D</a></li>
                </ul>
            </li>-->
            <li>
                <a href="">Tabelas de Jogos ▾</a>
                <ul class="dropdown">
                   <li><a href="../pages/tabela_de_classificacao.php">Grupos</a></li>
                   <li><a href="../pages/exibir_finais.php">Eliminatórias</a></li>
                   <li><a href="../pages/rodadas.php">Rodadas</a></li>
                </ul>     
            </li>
            <li>
                <a href="">Dados da Copa ▾</a>
                <ul class="dropdown">
                    <li><a href="../pages/publicacoes.php">Publicações</a></li>
                    <li><a href="../pages/sobreNosHistory.php">História</a></li>
                    <li><a href="">Estatísticas</a></li> <!--Criar um dropdown para os outros arquivos de estatistica de jogador-->
                </ul>
            </li>
            <li><a href="Jogos Proximos.php">Transmissão</a></li>
            <li><a href="../pages/sobreNosTeam.php">Sobre nós</a></li>
        </ul>
    </nav>

    <main>
        <!-- <section class="Slideshare">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="../../public/img/2022att.jpg" alt= "banner2022" style="width:100%">
                    
                </div>
                <div class="mySlides fade">
                    <img src="../../public/img/2024.1att.jpg" alt= "banner2024.1" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../../public/img/2024.2att.jpg" alt= "banner2024.2" style="width:100%">
                </div>
            </div> -->

        </section>
        <h3>NOTICIAS</h3>
        <hr>


        <section class="noticias">
            <div class="news-container">
                <?php while($row = $noticias->fetch_assoc()): ?>
                    <div class="news-block small">
                        <a href="<?php echo $row['link']; ?>" target="_blank">
                            <div class="img-container">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['imagem']); ?>" alt="<?php echo $row['titulo']; ?>">
                            </div>
                            <div class="news-text">
                                <h3><?php echo $row['titulo']; ?></h3>
                                <p><?php echo $row['descricao']; ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>

    <H3>CONTEÚDO DA COPA</H3>
    <hr>


        <section class="conteudo">
            <div class="image">
                <img src="../../public/img/IMG-20240404-WA0002.jpg" alt="Imagem Descritiva">
                <div class="content">
                    <h1><a href="sobreNosHistory.php" target="_self">Historia Copa das Panelas</a></h1>
                    <p>Descrição detalhada sobre o conteúdo do bloco. Este texto fornece mais informações sobre o que é representado pela imagem e o contexto relevante.</p>
                </div>
            </div>

            <div class="image">
                <img src="../../public/img/IMG-20240404-WA0002.jpg" alt="Imagem Descritiva">
                <div class="content">
                    <h1><a href="sobreNosTeam.php" target="_self">Jogadores da Copa</a></h1>
                    <p>Descrição detalhada sobre o conteúdo do bloco. Este texto fornece mais informações sobre o que é representado pela imagem e o contexto relevante.</p>
                </div>
            </div>

            <!-- <div class="image-block">
                <img src="../../public/img/IMG-20240404-WA0002.jpg" alt="Imagem Descritiva">
            </div>
            
            <div class="text-block">
                <h2><a href="sobreNosHistory.php" target="_self">Historia Copa das Panelas</a></h2>
                <p>Descrição detalhada sobre o conteúdo do bloco. Este texto fornece mais informações sobre o que é representado pela imagem e o contexto relevante.</p>
            </div>


            <div class="image-block">
                <img src="../../public/img/IMG-20240404-WA0002.jpg" alt="Imagem Descritiva">
            </div>
            <div class="text-block">
                <h2><a href="sobreNosTeam.php" target="_self">Jogadores da Copa</a></h2>
                <p>Descrição detalhada sobre o conteúdo do bloco. Este texto fornece mais informações sobre o que é representado pela imagem e o contexto relevante.</p>
            </div> -->
        </section>

    </main>

    <?php include 'footer.php'?>        
    <!--
    <div id="countdown-balloon">
        <span id="close-btn">&times;</span>
        <div id="description">INICIO DA COPA DAS PANELAS</div>
        <div id="countdown">
            <div id="days">00</div> dias
            <div id="hours">00</div> horas
            <div id="minutes">00</div> minutos
            <div id="seconds">00</div> segundos
        </div>
    </div>
    -->
    <script>document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
    });
});
</script>
    <script src="../../public/js/homepage.js"></script>
</body>
</html>