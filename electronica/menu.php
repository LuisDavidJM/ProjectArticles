<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Electrónica - LuisElectronic</title>
    <link rel="icon" href="../img/LogoLow.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-query.css">
    <link rel="stylesheet" href="../css/style-second.css">
    <link rel="stylesheet" href="../css/style-second-query.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Encuentra los mejores articulos e información sobre temas de Electrónica">
    <meta name="keywords" content="electronica, ingenieria">
    <link rel="canonical" href="https://www.luiselectronic.com/electronica/menu">

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
                <h1>Artículos de Electrónica de LuisElectronic</h1>
                
                <?php 
                  include("a-electronica.html");
                ?>
                
                <article class="proyect">
                    <div class="image-wrap">
                        <a href="https://www.luiselectronic.com/electronica/ejemplos-de-sistemas-de-control-de-lazo-abierto-y-lazo-cerrado"><img loading="lazy" width="500" height="281" src="imagenes-electronica/2_000_Control.webp" alt="Sistemas de control"></a>
                    </div>
                    <div class="proyect-info">
                        <h2><a href="https://www.luiselectronic.com/electronica/ejemplos-de-sistemas-de-control-de-lazo-abierto-y-lazo-cerrado">Ejemplos de Sistemas de Control de Lazo Abierto y Lazo Cerrado</a></h2>
                        <p>Un sistema de control de lazo abierto para un sistema de primer orden permite aumentar o disminuir la ganancia del sistema, pero no permite cambiar su constante de tiempo, mientras que, con un sistema de control de lazo cerrado para un sistema de primer orden, se puede variar ambos parámetros.</p>
                    </div>
                </article>
                
                <article class="proyect">
                  <div class="image-wrap">
                      <a href="https://www.luiselectronic.com/electronica/protocolo-de-comunicacion-industrial-profibus"><img loading="lazy" width="500" height="281" src="imagenes-electronica/1_000_Profibus.webp" alt="Protocolo Profibus"></a>
                  </div>
                  <div class="proyect-info">
                      <h2><a href="https://www.luiselectronic.com/electronica/protocolo-de-comunicacion-industrial-profibus">Protocolo de Comunicación Industrial PROFIBUS</a></h2>
                      <p>PROFIBUS de sus siglas “Process Field Bus” es básicamente un estándar de red digital de campo abierto.</p>
                  </div>
              </article>

              <!--
                
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