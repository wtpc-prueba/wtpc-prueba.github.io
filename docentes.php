<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WTPC - Workshop</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <style>
        .mainDocentes{
            background-image: url(img/fondoCodigo.png);
            background-size: 550px;
            background-repeat-x: no-repeat;
            background-position: right;
        }
        .boxDocente{
            margin-bottom: 40px;
        }
        .boxDocente .foto{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .boxDocente .foto .bkgFoto{
            width: 250px;
            height: 250px;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .boxDocente .foto.alcain .bkgFoto{
            background-image: url(img/pabloAlcain.png);         
        }
        .boxDocente .foto.jarne .bkgFoto{
            background-image: url(img/ceciliaJarne.png);         
        }
        .boxDocente .foto.lugones .bkgFoto{
            background-image: url(img/rodrigoLugones.png);         
        }
        .boxDocente .foto.molina .bkgFoto{
            background-image: url(img/mariaGracielaMolina.png);         
        }
        .boxDocente .foto.echevarria .bkgFoto{
            background-image: url(img/pabloEchevarria.png);         
        }

        .boxDocente .texto h3{
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: #23b573;
        }
        .boxDocente .texto p{
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 100;
            color: #1A1A1A;
        }

        .mainDocentes h3.separador{
            width: 100%;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: 500;
            margin: 40px 0;
        }
    </style>
</head>
<body>
    
    <?php $_GET['k'] = 'docentes'; include_once("header.php"); ?> 

    <section class="mainDocentes">

        <div class="container">
            
            
            <div class="boxDocente row">
                <div class="foto alcain col-sm-12 col-lg-3">
                    <div class="bkgFoto"></div>
                </div>
                <div class="texto col-sm-12 col-lg-9">
                    <h3>Pablo Nicolás Alcain</h3>
                    <p>Soy Licenciado en Física por la Universidad de Buenos Aires y Jefe de Trabajos Prácticos en el Departamento de Física. Estoy por defender mi tesis doctoral, que consiste en un estudio de Astrofísica Nuclear, más específicamente la nucleosíntesis en supernovas y en colisiones de estrellas de neutrones, además del estudio interno de la corteza de las estrellas de neutrones. Mis intereses son específicamente en el desarrollo de código de alto desempeño versatil y además a veces soy demasiado fierrero: una de las tareas que hice fue por ejemplo configurar e instalar un cluster de tipo beowulf con GPU en las computadoras de mi grupo. Soy, además, un total defensor de la palabra "eficiencia" en todos sus aspectos: no sólo el código que escribamos tiene que ejecutarse rápido, sino además tiene que poder usarse y desarrollarse rápido, para favorecer el uso colaborativo. Cuando estoy aburrido hago programas de dudosa utilidad para el resto de la gente y todavía me emociono como la primera vez cuando un código de dinámica molecular conserva la energía total.</p>
                </div>
            </div>

            <div class="boxDocente row">
                <div class="texto col-sm-12 col-sm-push-12 col-lg-9">
                    <h3>Cecilia Jarne</h3>
                    <p>Soy Física y actualmente estoy terminando algunos trabajos en Análisis de señales. Recientemente comencé a trabar también con redes neuronales. Anteriormente solía trabajar en un campo muy distinto siendo parte de del experimento Pierre Auger y trabajando en rayos cósmicos de ultra alta energía. Recibí mi título de grado en la Universidad Nacional de La Plata en 2010 y mi titulo de Doctorado en 2015 también allí. Fui Posdoc en el Instituto de Física de Buenos Aires hasta 2017 trabajando en el análisis de cantos de pájaros. Desde 2015 que soy profesora en el Departamento de Ciencia y tecnología de la Universidad de Quilmes, donde también investigo. He publicado dos artículos en procesos de Markov y he sido co-autor de mas de 40 con la Colaboración Pierre Auger. Mis intereses de investigación actuales incluyen procesos estocásticos, biofísica, análisis d señales y redes neuronales.</p>
                </div>
                <div class="foto jarne col-sm-12 col-sm-push-12 col-lg-3">
                    <div class="bkgFoto"></div>
                </div>
            </div>

            <div class="boxDocente row">
                <div class="foto lugones col-sm-12 col-lg-3">
                    <div class="bkgFoto"></div>
                </div>
                <div class="texto col-sm-12 col-lg-9">
                    <h3>Rodrigo Lugones</h3>
                    <p>Soy estudiante de doctorado en Física en el Instituto de Física de Buenos Aires, en el grupo de Fluidos y Plasma (FLiP). Trabajo con simulaciones numéricas de plasma turbulento, particularmente con el modelo magnetohidrodinámico (MHD). Utilizo técnicas de HPC para desarrollar y correr programas en el cluster de mi grupo. Además, soy docente del Departamento de Física de la Facultad de Ciencias Exactas y Naturales-UBA, en el área de Fluidos y Electromagnetismo.</p>
                </div>
            </div>

            <div class="boxDocente row">
                <div class="texto col-sm-12 col-lg-9">
                    <h3>María Graciela Molina</h3>
                    <p>Soy Informática y actualmente estoy trabajando con una sistema para monitoreo de eventos de meteorología espacial para lo cual me focalizo en el análisis de grandes volúmenes de datos y otras herramientes de Data Science. Sintegrante del Laboratorio de Computación Científica y al Laboratorio de Telecomunicaciones de la Facultad de Ciencias Exactas y Tecnología de la Universidad Nacional de Tucumán (FACET-UNT). Mi tesis doctoral trató sobre detección automática de ecos de radar con aplicaciones en geofísica espacial. Para ello, apliqué técnicas de procesamiento de señales y desarrollé algoritmos numéricos para ser aplicados es el diseño de un prototipo de sondador ionosférico. Formo parte del grupo multidisciplinario de técnicas de programación científica, donde una de nuestras principales tareas es enseñar como aplicar distintas herramientas de programación para desarrollar software.</p>
                </div>
                <div class="foto molina col-sm-12 col-lg-3">
                    <div class="bkgFoto"></div>
                </div>
            </div>

            <h3 class="separador">Docentes de ediciones anteriores</h3>

            <div class="boxDocente row">
                <div class="foto echevarria col-sm-12 col-lg-3">
                    <div class="bkgFoto"></div>
                </div>
                <div class="texto col-sm-12 col-lg-9">
                    <h3>Pablo Echevarría</h3>
                    <p>Es Licenciado en Ciencias de la Computación de la Universidad de Buenos Aires. Trabaja en Ciencias de la Tierra desde 2012, primero en un proyecto de asimilación de datos y modelado numérico de olas oceánicas en cuya área realizó su tesis de licenciatura, y después como personal permanente en el Servicio Meteorológico Nacional en el área de investigación y desarrollo. </p>
                </div>
            </div>
            
        </div>
    </section>


    <section id="contacto" class="contacto">
        <div class="container" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
            <h2>Contacto</h2>
            <span>Ante cualquier duda o consulta, escribir a nuestro correo electrónico:</span>
            <span class="mail"><a href="mailto:workshop.tpc@gmail.com">workshop.tpc@gmail.com</a></span>

            <div class="redes">
                <ul>
                    <li><a target="_blank" href="https://twitter.com/workshoptpc"><i aria-hidden="true" class="fa fa-twitter-square"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/workshoptpc"><i aria-hidden="true" class="fa fa-facebook-square"></i></a></li>
                    <li><a target="_blank" href="https://github.com/wtpc"><i aria-hidden="true" class="fa fa-github-square"></i></a></li>
                </ul>
            </div>
        </div>
    </section>


</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(function () {
        var $win = $(window);
        // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento
        var $pos = 250;
        $win.scroll(function () {
            
            if ($win.scrollTop() <= $pos)
                $('nav.menu').removeClass('fijar');
            else {
                $('nav.menu').addClass('fijar');
            }
        });
    });
</script>
<script>
/*Scroll transition to anchor*/
$("a.contactoAnchor").on('click',function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $('#contacto').offset().top
    }, 500);
    return false;
});
</script>
<script>
    $("#menuMobile").click(function(){
        $(".menuMobileBox").css('display', 'flex');
        $("body").css('overflow', 'hidden');
    });

    $("#close").click(function(){
        $(".menuMobileBox").hide();
        $("body").css('overflow', 'auto');
        
    });
    
</script>
<script>
    $(".contactoAnchor").on('click',function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#contacto').offset().top
        }, 750);

       
        return false;

    });
</script>