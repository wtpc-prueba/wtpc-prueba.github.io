<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WTPC - Workshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <style>
        .mainPrograma{
            background-image: url(img/fondoCodigo.png);
            background-size: 550px;
            background-repeat-x: no-repeat;
            background-position: right;
            float: left;
            width: 100%;
        }
        .mainPrograma .boxPrograma:first-of-type{
            margin-top: 50px;
        }
        .mainPrograma .boxPrograma:last-of-type{
            margin-bottom: 50px;
        }
        .mainPrograma .boxPrograma{
            float:left;
            width: 100%;
            padding: 40px 20px;
        }
        .mainPrograma .boxPrograma.verde{
            background-color: #22B573;
        }
        .mainPrograma .boxPrograma .texto h3{
            color: #22B573;
        }
        .mainPrograma .boxPrograma .texto h3,        
        .mainPrograma .boxPrograma .texto p{
            font-family: 'Montserrat', sans-serif;
        }
        .mainPrograma .boxPrograma .texto p{
            font-weight: 100;
            font-size: 14px;
        }        
        .mainPrograma .boxPrograma.verde .texto h3,        
        .mainPrograma .boxPrograma.verde .texto p{
            color: #FFF!important;
        }        
    </style>
</head>
<body>
    
    <?php $_GET['k'] = 'programa'; include_once("header.php"); ?> 

    <section class="mainPrograma">
            
            <div class="boxPrograma verde">
                <div class="container">
                    <div class="texto">
                        <h3>1. Desarrollo de Software</h3>
                        <p>Introducción al desarrollo de software. ¿De qué hablamos cuando hablamos de software científico? Enfoques en eficiencia, resultados correctos. Lenguajes de programación para software científico. Características del software libre y similitudes con el desarrollo científico.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma">
                <div class="container">
                    <div class="texto">
                        <h3>2. Lenguaje interpretado (python)</h3>
                        <p>Introducción a Python. Sintaxis y Zen de Python. Versatilidad: Python como a) imperativo, b) funcional, c) orientado a objetos. Liberías y namespaces.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma verde">
                <div class="container">
                    <div class="texto">
                        <h3>3. Source Code Management (GIT)</h3>
                        <p>Introducción a git como sistema de control de versiones distribuido. Comandos básicos para trabajo solitario. git para desarrollo colaborativo de software. GitHub.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma">
                <div class="container">
                    <div class="texto">
                        <h3>4. Lenguajes compilados (C / FORTRAN)</h3>
                        <p>Funcionamiento básico de un compilador. Punteros y referencias. Stack de las funciones. Tiempos de compilación vs tiempos de ejecución.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma verde">
                <div class="container">
                    <div class="texto">
                        <h3>5. Debugging y Profiling</h3>
                        <p>Diferencias entre debugging y profiling para lenguajes compilados e interpretados. Identificar bottlenecks. Estrategias de optimización de hardware (eficiencia de cache, autovectorización) y de software (algoritmos, expansión de polinomios de Horner…). Validación de resultados. Unit test y regression test.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma">
                <div class="container">
                    <div class="texto">
                        <h3>6. Documentación</h3>
                        <p>Cómo escribir documentación eficiente para el usuario y para desarrolladores. Comentarios que ayudan y comentarios que confunden. Herramientas para la generación automática de manuales de referencia.</p>
                    </div>
                </div>
            </div>

            <div class="boxPrograma verde">
                <div class="container">
                    <div class="texto">
                        <h3>7. Computación de alto rendimiento</h3>
                        <p>Desafíos y estado del arte. Rendimiento de aplicaciones paralelas. Programación en entornos paralelos. MPI. OpenMP.</p>
                    </div>
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