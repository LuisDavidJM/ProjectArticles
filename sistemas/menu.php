<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Sistemas Computacionales - LuisElectronic</title>
    <link rel="icon" href="../img/LogoLow.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-query.css">
    <link rel="stylesheet" href="../css/style-second.css">
    <link rel="stylesheet" href="../css/style-second-query.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Encuentra los mejores articulos e información sobre Sistemas y Computación">
    <meta name="keywords" content="sistemas, computacion, ingenieria">
    <link rel="canonical" href="https://www.luiselectronic.com/sistemas/menu">

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
                <h1>Artículos de Sistemas de LuisElectronic</h1>

                <?php 
                        include("a-sistemas.html");
                ?>
        
                <article class="proyect">
                    <div class="image-wrap">
                        <a href="https://www.luiselectronic.com/sistemas/como-crear-un-servidor-web-en-windows"><img loading="lazy" width="500" height="281" src="imagenes-sistemas/16_000_IIS.webp" alt="Internet Information Services"></a>
                    </div>
                    <div class="proyect-info">
                        <h2><a href="https://www.luiselectronic.com/sistemas/como-crear-un-servidor-web-en-windows">Como crear un servidor web en Windows</a></h2>
                        <p>Internet Information Services o IIS es un servidor web y un conjunto de servicios para el sistema operativo Microsoft Windows.</p>
                    </div>
                </article>
        
                <article class="proyect">
                    <div class="image-wrap">
                        <a href="https://www.luiselectronic.com/sistemas/como-instalar-y-configurar-samba-en-ubuntu-linux"><img loading="lazy" width="500" height="281" src="imagenes-sistemas/15_000_Samba.webp" alt="Software Samba"></a>
                    </div>
                    <div class="proyect-info">
                        <h2><a href="https://www.luiselectronic.com/sistemas/como-instalar-y-configurar-samba-en-ubuntu-linux">Como instalar y configurar samba en Ubuntu Linux</a></h2>
                        <p>Samba es un software que permite poder compartir archivos e impresoras entre computadoras en una misma red local. Utiliza para ello un protocolo conocido como SMB/CIFS compatible con sistemas operativos Linux.</p>
                    </div>
                </article>
        
                <article class="proyect">
                    <div class="image-wrap">
                        <a href="https://www.luiselectronic.com/sistemas/realizar-instalacion-de-sistema-operativo-en-raspberry-pi"><img loading="lazy" width="500" height="281" src="imagenes-sistemas/6_000_Raspberry.webp" alt="Raspberry Pi"></a>
                    </div>
                    <div class="proyect-info">
                        <h2><a href="https://www.luiselectronic.com/sistemas/realizar-instalacion-de-sistema-operativo-en-raspberry-pi">Realizar instalación del sistema operativo en Raspberry PI</a></h2>
                        <p>Raspberry es una placa computadora de bajo coste desarrollada en el Reino Unido, con el objetivo de estimular la enseñanza de la informática en las escuelas.</p>
                    </div>
                </article>
        
                <article class="proyect">
                    <div class="image-wrap">
                        <a href="https://www.luiselectronic.com/sistemas/pricipales-conectores-de-una-red-lan"><img loading="lazy" width="500" height="281" src="imagenes-sistemas/3_000_Conectores.webp" alt="Conectores LAN"></a>
                    </div>
                    <div class="proyect-info">
                        <h2><a href="https://www.luiselectronic.com/sistemas/pricipales-conectores-de-una-red-lan">Principales conectores de una Red LAN</a></h2>
                        <p>El conector es el medio a través del cual fluye la información a través de la red. Hay distintos tipos de conectores en las redes LAN. Una red puede utilizar uno o más tipos de conectores.</p>
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