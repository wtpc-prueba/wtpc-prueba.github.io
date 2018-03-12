<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WTPC - Workshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    
    <?php $_GET['k'] = 'objetivos'; include_once("header.php"); ?> 

    <section class="mainTexto">
        <div class="container">
            <h2 style="font-size: 28px;
    color: #1A1A1A;
    font-weight: 700;
    width: 100%;
    text-align:center;
    letter-spacing: 1px;
    font-family: 'Montserrat', sans-serif;">Objetivos</h2>
            <p>
                El objetivo principal del curso es presentar estrategias y buenas prácticas al momento de diseñar e implementar software científico. El curso está orientado a científicos jóvenes en formación y estudiantes avanzados de carreras de grado científicas.
            </p>
            <p>
                La principal motivación para la realización de este evento es que se ha detectado la necesidad, tanto en estudiantes de postgrado como en grupos de investigación ya consolidados, de contar con instrumentos más formales y herramientas más actuales para el desarrollo de software científico y también para su uso eficiente: elección de librerías, colaboración con un código de desarrollo colaborativo, interfaz del usuario con el programa.
            </p>
            <p>
                El curso, de este modo, apunta a conocer los fundamentos de los lenguajes compilados y cuáles son los distintos paradigmas de programación, pero también a un uso eficiente del tiempo del científico que los utiliza a través de lenguajes interpretados y desarrollo de software modular y reutilizable.
            </p>
            
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