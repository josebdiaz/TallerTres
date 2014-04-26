<?php require_once('includes/database.php');
    
    //Acá el tipo Bar, sería reemplazado por el id del objeto seleccionado

    $query = "SELECT * FROM sitios WHERE tipo='Bar'";
    $resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
                    
    while ( $row = mysql_fetch_array($resultado)){
        $valores[] = $row;
    }
            
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/estilos.css">

        


    </head>
    <body>
        

        <div class="cabecera">
            <header class="wrapper clearfix cabecera">
                <h1 class="title">El plan que pega</h1>
            </header>
        </div>

        <div class="main-container">
            
            <section class="menu">            
                <div id="laImagen">
                    <img  id= "birra" class="icono" src="img/beer.png"/>
                    <img  id= "comida" class="icono" src="img/food.png"/>
                    <img  id= "cine" class="icono" src="img/cinema.png"/>
                    <img  id= "tienda" class="icono" src="img/comerce.png"/>
                </div>

                <div id="recipiente"></div>
            </section>
            <section class="divMapa"> 
                <canvas id="lienzo" width="160" height="234">
                   It seems like you've opened Internet Explorer, an Ewok will die every minute until you get a decent browser
                </canvas>

                <div id="map-canvas"></div>
            </section>
             <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer id="elFooter" class="wrapper">
                <h4>(c) Jose Bolaños 2014</h4>
            </footer>
        </div>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        

        <script type="text/javascript">

            function initialize() {
                var elCentro = new google.maps.LatLng(3.40912,-76.58046);
                var mapOptions = {
                zoom: 5,
                center: elCentro
              };
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);
           /*
           En este bloque de codigo debería agregar los marcadores buscados en la base de datos (este iría ubicado en el drop),
           sin embargo presenta un error y no me deja visualizar el mapa.
           El error es: "Uncaught SyntaxError: Unexpected identifier" 
            <?php 
                foreach ($valores as $marker) {
            ?>
            var posmarker = new google.maps.LatLng(<?php echo $marker ['latitud'];?>,<?php echo $marker ['longitud'];?>);
            var marker_<?php echo $marker ['id'];?> = new google.maps.Marker({
                  position: posmarker,
                  map: map,
                  title: <?php echo $marker ['nombre'];?>
                });
            <?php 
                }
            ?>  
            */
           
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        

        </script>
        <script src="js/main.js"></script> 
    </body>
</html>