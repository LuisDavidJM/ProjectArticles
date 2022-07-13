<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Programación - LuisElectronic</title>
    <link rel="icon" href="../img/LogoLow.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-query.css">
    <link rel="stylesheet" href="../css/style-second.css">
    <link rel="stylesheet" href="../css/style-second-query.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Encuentra los mejores articulos e información sobre Programación.">
    <meta name="keywords" content="programacion, ingenieria">
    <link rel="canonical" href="https://www.luiselectronic.com/programacion/menu">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3P8813XQ22"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-3P8813XQ22');
    </script>
    <!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2711205692538383"
     crossorigin="anonymous"></script>-->
</head>

<body>
    <div class="conteiner">

        <?php 
            include("../header.html");
        ?>

        <main class="main">

            <!--/*---------*/-->
            <section id="articles">
                <h1>Artículos de Programación de LuisElectronic</h1>

                <?php 
                      include("a-programacion.html");
                ?>
        
                <!--
                  <article class="proyect">
                    <div class="image-wrap">
                      <a href="#"><img src="imagenes-programacion/prueba.png" alt="Imagen"></a>
                    </div>
                    <div class="proyect-info">
                      <h2><a href="#">Nombre del proyecto</a></h2>
                      <p>It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.</p>
                    </div>
                  </article>
        
                -->
            </section>
            <!--/*---------*/-->
        </main>

        <?php 
            include("../aside.html");
        ?>

        <div class="clearfix"></div>

        <?php 
            include("../footer.html");
        ?>

    </div>
    <script src="../js/main.js"></script>
</body>

</html>