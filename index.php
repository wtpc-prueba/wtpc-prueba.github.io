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
    
    <?php $_GET['k'] = 'home'; include_once("header.php"); ?> 

    <section class="mainTexto">
        <div class="container">
            <p>
                Esta es la página del Workshop en Técnicas de Programación Científica 2018 (WTPC18), que se llevará a cabo en la Universidad Nacional de Quilmes, entre el 26 de febrero y el 9 de marzo de 2018.
            </p>
            <p>
                El curso intensivo se desarrollará mediante presentaciones sobre conceptos fundamentales por las mañanas y, por las tardes, se realizarán sesiones obligatorias de hands-on en las que los alumnos pondrán en práctica los temas desarrollados. Durante la segunda semana se propondrán proyectos grupales para ser desarrollados por los participantes. El principal el objetivo de estos proyecto es el de poner a prueba globalmente los contenidos vistos en el curso haciendo énfasis en el trabajo colaborativo.
            </p>
            <p>
                En esta próxima edición, contaremos con una sesión de pósters el día viernes 2 de marzo, que será acompañada con un ágape.
            </p>
            <p>
                Este curso está basado en los cursos dictados por el ICTP en los años 2014 y 2015, y en ediciones anteriores del curso (ver Clases). Agradecemos mucho (muchísimo) a Ivan Girotto, Axel Kohlmeyer y David Grellscheid por los cursos y toda la información que nos brindaron.
            </p>
        </div>
    </section>

    <section class="mainInscripcion">
        <div class="overlay"></div>
        <div class="container" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
            <h2>Inscripción cerrada</h2>
            <span>La fecha límite para inscribirse fue el <b>viernes 2 de febrero</b></span>
        </div>
    </section>

    <section class="mainInformacion">
        <div class="container">
            <h2>Información del curso</h2>
            <p>
                Las clases se realizarán en la Universidad Nacional de Quilmes. La dirección de la UNQ es Roque Sáenz Peña 352, Bernal, Provincia de Buenos Aires. Pueden ver el mapa de la zona más abajo. La UNQ se encuentra a 4 cuadras de la estación de tren Bernal, de la línea de ferrocarriles General Roca (ramales Constitución-La Plata y Constitución-Bosques). También los alcanzan las líneas de colectivos 324, 263, 159 B/G, 22, 98 (3), 266 y 159 (1).    
            </p>
        </div>
            
    </section>

    <section id="map">
    </section>

    <section class="sponsors">
        <div class="container" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
            <h2>Sponsors</h2>
            <span> Agradecemos muchísimo la ayuda que nos dan nuestros sponsors, que hacen posible que esta actividad pueda llevarse a cabo.</span>
            <div class="imgSponsors">
                <img src="img/sponsorQuilmes.png" alt="Universidad Nacional de Quilmes - UNQui">
                <img src="img/sponsorPython.png" alt="Python">
                <img src="img/sponsorSadosky.png" alt="Fundación Sadosky">
            </div>
        </div>
    </section>

    <section class="contacto" id="contacto">
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
      function initMap() {

        var uluru = {lat: -34.706472, lng: -58.278586};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1-h4ELzBEb0ZnCdhmvEKDEiJWmY7HZrg&callback=initMap">
</script>

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