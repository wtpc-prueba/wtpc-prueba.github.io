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
    
    <?php $_GET['k'] = 'calendario'; include_once("header.php"); ?> 

    <section class="mainTexto" style="margin: 20px 0;">
        <div class="container" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
        <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=es&amp;src=quseta7ldiueq0o3dqm3p8kd74%40group.calendar.google.com&amp;color=&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;dates=20180226%2F20180310" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

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