<?php
    //Variables
    $ancho = 150;
    $alto = 75;
    $numeroLineasVertical = 5;
    $numeroLineasHorizontal = 3;
    $fuenteCaptcha = "../fonts/captcha_font.ttf";
    //Obtener palabras aleatorias de 4 a 6 caracteres
    $textoIncrementoMax = rand (0, 2);
    $textoTamayo = 4 + $textoIncrementoMax;
    $fuentaTamayo = 28 - $textoIncrementoMax;
    $textoAngularMin = -20;
    $textoAngularMax = 20;
    $textoCurvMin = -16;
    $textoCurvMax = 16;
    $textoMargen = round (($ancho - (($fuentaTamayo - 4) * $textoTamayo)) / 2) + 1;
    $numeroPuntos = 500;
    $anchoPunto = 3;
    $altoPunto = 3;
    //Creación de cadena aleatoria
    $codigo = strtoupper (md5 (microtime () * mktime ()));
    //Eliminamos caracteres que presten a la confusión
    $codigo = str_replace (array("0", "1", "7"), array("Z", "H", "X"), $codigo);
    $clave = substr ($codigo, 0, $textoTamayo);
    session_start ();
    $_SESSION['clave'] = md5 ($clave);
    //Almacenamos el valor de $clave como variable de sesión codificada.

    //Crear imagen.
    $imagen = imagecreate ($ancho, $alto);

    //Colores.
    $colorMargen = imagecolorallocate ($imagen, 255, 255, 255);
    //Aleatorio colores seguros.
    $rgb[0] = rand (1, 5) * 51;
    $rgb[1] = rand (1, 5) * 51;
    $rgb[2] = rand (1, 5) * 51;

    $colorAleatorio = imagecolorallocate ($imagen, $rgb[0], $rgb[1], $rgb[2]);
    $colorAleatorioInvertido = imagecolorallocate ($imagen, 255 - $rgb[0], 255 - $rgb[1], 255 - $rgb[2]);

    //Pintar el fondo con el color aleatorio.
    imagefill ($imagen, 0, 0, $colorAleatorio);

   //Rejilla
    imagesetthickness ($imagen, 0);
    //Líneas Verticales.
    $distancia = round ($ancho / ($numeroLineasVertical + 1));
    for ($i = $distancia; $i < $ancho ; $i += $distancia) {
        imageline ($imagen, $i, 0, $i, $alto, $colorAleatorioInvertido);
    }

    //Líneas Horizontales.
    $distancia = round($alto  / ($numeroLineasHorizontal + 1));
    for ($i = $distancia; $i < $alto ; $i += $distancia) {
        imageline ($imagen, 0, $i, $ancho , $i, $colorAleatorioInvertido);
    }

    //Texto Horizontal
    for ($i = 0; $i < strlen ($clave); $i += 1) {
        $anguloLetras = rand ($textoAngularMin, $textoAngularMax);
        $posX = ($textoMargen) + ($i * ($fuentaTamayo - 4));
        $posY = (($alto / 2) + 10) + (cos ($posX) * rand ($textoCurvMin, $textoCurvMax));
        imagefttext ($imagen, $fuentaTamayo, $anguloLetras, $posX, $posY, $colorAleatorioInvertido, $fuenteCaptcha,
            $clave[$i]);
    }

    //Ruido
    for ($i = 0; $i < $numeroPuntos; $i += 1) {
        $x = rand ($anchoPunto, ($ancho - $anchoPunto));
        $y = rand ($altoPunto, ($alto - $altoPunto));
        imagefilledellipse ($imagen, $x, $y, rand (1, $anchoPunto), rand (1, $altoPunto), $colorAleatorioInvertido);
    }

    //Filtro BLUR
    imagefilter ($imagen, IMG_FILTER_NEGATE);
    imagefilter ($imagen, IMG_FILTER_GAUSSIAN_BLUR);

    //Salida
    header ('Content-Type: image/jpeg');
    header ('Pragma: no-cache');
    imagejpeg ($imagen);
    imagedestroy ($imagen);
?>

 