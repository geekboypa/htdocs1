<html>
    <head>
        <title>laboratorio 2.5</title>
    </head>
    <body>
            <?php
            //Creacion del arreglo array ("clave" => "valor")
            $figuras = array ('cuadrado', 'triangulo', 'circulo');
            $figuras[1]='rectangulo';
            mostrar_figuras($figuras, "asignacion de rectangulo");

            array_push($figuras, 'pentagono');
            mostrar_figuras($figuras,"adicion de pentagono al final"); 
            array_unshift($figuras, 'hexagono');
            mostrar_figuras($figuras,"adicion de hexagono al final"); 
            array_pop($figuras);
            mostrar_figuras($figuras, "elimincacion del ultimo");
            array_shift($figuras);
            mostrar_figuras($figuras,"eliminacion del primero");

            function mostrar_figuras($figuras, $mensaje){
                echo"<br>Arreglo despues de $mensaje </br>";
                foreach($figuras as $figura){
                    echo "$figura <br>";
                }
            }
            ?>
    </body>
</html>