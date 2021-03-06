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
        .mainClases{
            float: left;
            width: 100%;
            margin-bottom: 50px;
        }   
        .mainClases .logo2018{
            width: 100%;
            display: flex;
            margin-bottom: 40px;
            justify-content: center;
        }
        .mainClases .logo2018 > img{
            height: 70px;
        }  

        .mainClases .boxClase h3{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            color: #22B573;
            font-size: 24px;
            margin-top: 20px;
        }
        .mainClases .boxClase span{
            font-family: 'Montserrat', sans-serif;
            font-weight: 100;
            font-size: 16px;
        }
        .mainClases .boxClase span > a{
            color: #1A1A1A!important;
        }

        .mainClases .boxClase .clase{
            margin-bottom: 5px;
        }
        .mainClases .boxClase .clase a:hover,
        .mainClases .boxClase a:hover{
            text-decoration: none!important;
        }
        
    </style>
</head>
<body>
    
    <?php $_GET['k'] = 'clases'; include_once("header.php"); ?> 

    <section class="mainClases">

        <div class="logo2018">
            <img src="img/wtpc2018.png" alt="">
        </div>
            
        <div class="boxClase">
            <div class="container">
                <div class="row">

                

                    <div class="col-sm-12">
                        <h3><span><a href="https://wtpc.github.io/clases/2018/charla_abierta.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a><b>Charla abierta</b></span></h3>
                    </div>

                    <div class="col-sm-12">
                        <h3><span><a href="https://wtpc.github.io/clases/2018/wtpc2018-clases_teoricas.zip" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a><b>zip con todas las clases teóricas del WTPC18</b></span></h3>
                    </div>

                    

                    <div class="col-sm-12">
                        <h3>Lunes 26 de Febrero</h3>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/01_desarrollo_software.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Introducción al Desarrollo del Software</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/02_intro_python.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Introducción a Python</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://github.com/wtpc/HO-python" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: Python como lenguaje de scripting</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Martes 27 de Febrero</h3>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/03_git.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Sistemas de control de versiones: git</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/04_oop.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Introducción a la Programación Orientada a Objetos</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="http://github.com/wtpc/HOgit"><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: git</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="http://github.com/wtpc/HOoop_2018"><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: Programación Orientada a Objetos - OOP</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Miércoles 28 de Febrero</h3>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/05_linking_compiled.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Compilación y Linkeo</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/06_linking_python.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Comunicando C con Python</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="http://github.com/wtpc/HOcompiled"><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: Compilación y Linkeo</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="http://github.com/wtpc/HOpython-compiled"><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: Comunicando C con Python</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Jueves 1 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/07_arquitectura.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Arquitectura del Computador</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/08_debug_profile.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Debugging y Profiling</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/09_gnu_makefile.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>GNU toolchain + Makefile</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="http://github.com/wtpc/HOdebug-profile"><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Hands-on: Debugging y Profiling</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Viernes 2 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/10_optimizacion.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Optimización</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/11_documentacion.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Documentación</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Lunes 5 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/12_deployment.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Herramientas de <i>deployment</i></span>
                        <br><i>Charla invitada: Dr. Osvaldo Martin (UNSL) - Programación probabilística en Python: PyMC3</i>
                    </div>

                    <div class="col-sm-12">
                        <h3>Martes 6 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 col-lg-6 clase">
                        <i>Charla invitada: Edgar Alszyler (Fundación Sadosky) - Data Science con Panda</i>
                    </div>
                    <div class="col-sm-12 col-lg-6 clase">
                        <i>Charla invitada: Leandro Lombardi (Fundación Sadosky) - Machine Learning</i>
                    </div>

                    <div class="col-sm-12">
                        <h3>Miércoles 7 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/13_entornos_masivamente_paralelos.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Entornos masivamente paralelos</span>
                        + <span><a href="https://wtpc.github.io/clases/2018/mpicheatsheet.pdf" download><i aria-hidden="true" class="fa fa-download"></i> MPI <i>Cheatsheet</i></a></span>
                        <br><span><a href="https://wtpc.github.io/clases/2018/charlas_invitadas/FlaviaAlbarracin-Simulaciones_en_sistemas_magn%C3%A9ticos_frustados.pdf" download><i><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;Charla invitada: Flavia Gómez Albarracín (IFLySiB - UNLP) - Simulaciones en sistemas magnéticos frustados</i></a></span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Jueves 8 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/charlas_invitadas/NatalioKrasnogor-Apps_biologicas.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Charla invitada: Natalio Krasnogor (ICOS, Newcastle University) - Apps biologicas: como programar organismos vivos (modelos, herramientas, ejemplos)</span>
                    </div>

                    <div class="col-sm-12 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/charlas_invitadas/NatalioKrasnogor-Simbiotics.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Charla invitada: Natalio Krasnogor (ICOS, Newcastle University) - Infraestructuras informaticas para el modelado 3D de colonias bacterianas y avances en la integracion de material biologico al internet of things</span>
                    </div>

                    <div class="col-sm-12">
                        <h3>Viernes 9 de Marzo</h3>
                    </div>
                    
                    <div class="col-sm-12 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/charlas_invitadas/AlejandroDiazCaro-Fundamentos_de_lenguajes_de_programacion_cuanticos.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a><i>Charla invitada: Alejandro Díaz-Caro (UNQ/CONICET) – Fundamentos de lenguajes de programación cuánticos</i></span>
                    </div>

                    <div class="col-sm-12 clase">
                        <span> <i>Charla invitada: Rodrigo Laje (UNQ/CONICET) - Tiempo, control motor, caos y reproducibilidad en el cerebro: hay lugar para todos</i>   </span>
                    </div>
                    




                    <div class="col-sm-12">
                        <h3>Proyectos</h3>
                    </div>
                    
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/proyectos/proyecto_redes.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Redes neuronales</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/proyectos/proyecto_md.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Dinámica molecular</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/proyectos/proyecto_simbot.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>SIMBOT</span>
                    </div>
                    <div class="col-sm-12 col-lg-4 clase">
                        <span><a href="https://wtpc.github.io/clases/2018/proyectos/proyecto_ecosistema.pdf" download><i aria-hidden="true" class="fa fa-download"></i>&nbsp;&nbsp;</a>Simulación de un ecosistema</span>
                    </div>
                   

                    
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