<?php
		//Elegimos el ancho y alto del captcha
		$ancho = 120;
		$alto = 60;

		//Crear imagen.
		$imagen = imagecreate($ancho, $alto);

		//Colores.
		$negro = imagecolorallocate($imagen, 0, 0, 0);
		$gris = imagecolorallocate($imagen, 100, 100, 100);
		$rgb[0] = rand(0,255);
		$rgb[1] = rand(0,255);
		$rgb[2] = rand(0,255);

		$colorAleatorio = imagecolorallocate($imagen, $rgb[0], $rgb[1], $rgb[2]);
		$colorAleatorioInvertido = imagecolorallocate($imagen, 255-$rgb[0], 255-$rgb[1], 255-$rgb[2]);

		//Pintar el fondo con el color aleatorio.
		imagefill($imagen, 0, 0, $colorAleatorio);

		//Marco
		imageline($imagen, 0, 0, $ancho, 0, $negro); // -
		imageline($imagen, 0, 0, 0, $alto, $negro); // |
		imageline($imagen, $ancho-1, $alto-1, 0, $alto-1, $negro); // - | -
		imageline($imagen, $ancho-1, $alto-1, $ancho-1, 0, $negro); // - | - |

		//Rejilla
		$espacio=15;
		for($i=0;$i<$ancho;$i=$i+$espacio){
			imageline($imagen, $i, 0, $i, $alto, $gris);
		}

		for($i=0;$i<$ancho;$i=$i+$espacio){
			imageline($imagen, 0, $i, $ancho, $i, $gris);
		}


		//texto
		$texto="SUPER CAPTCHA";
		$texto2="de lado";
		$angulo=rand(-50,50);
		$ttf="../fonts/koolbean.ttf";


		//forma1
		//imagefttext($imagen, 20, $angulo, 100, $alto/2, $colorAleatorioInvertido, $ttf, $texto);

		for($i=0; $i<strlen($texto); $i++){
			$angulo=rand(-30,30);
			$x=17+$i*30;
			//$y=$alto/3 + rand(-20, 20);
			$y=$alto/2 + cos($x) * 15;
			imagefttext($imagen, 20, $angulo, $x, $y, $colorAleatorioInvertido, $ttf, $texto[$i]);
		}

		//Escribir verticalmente
		$x=0;
		$y=155;
		imagestringup($imagen, 30, $x, $y, $texto2, $colorAleatorioInvertido);

		//ruido
		$puntos=1700;
		for($i=0; $i<$puntos; $i++){
			$x=rand(1, $ancho-1);
			$y=rand(1, $alto-1);
			imagesetpixel($imagen, $x, $y, $colorAleatorioInvertido);
		}

		//Filtro
		imagefilter($imagen, IMG_FILTER_GAUSSIAN_BLUR);

		//Salida
    header('Content-Type: image/jpeg');
    imagejpeg($imagen);
    imagedestroy($imagen);
    header("Content-type: image/png");
	imagepng($imagen); // Mostrar imagen.
	imagedestroy($imagen);

    /*
    //Settings: You can customize the captcha here
    $image_width = 120;
    $image_height = 40;
    $characters_on_image = 6;
    $font = '../fonts/action.ttf';

    //The characters that can be used in the CAPTCHA code.
    //avoid confusing characters (l 1 and i for example)
    $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
    $random_dots = 0;
    $random_lines = 20;
    $captcha_text_color="0x142864";
    $captcha_noice_color = "0x142864";

    $code = '';


    $i = 0;
    while ($i < $characters_on_image) {
        $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters)-1), 1);
        $i++;
    }


    $font_size = $image_height * 0.75;
    $image = @imagecreate($image_width, $image_height);


    // setting the background, text and noise colours here //
    $background_color = imagecolorallocate($image, 255, 255, 255);

    $arr_text_color = hexrgb($captcha_text_color);
    $text_color = imagecolorallocate($image, $arr_text_color['red'],
        $arr_text_color['green'], $arr_text_color['blue']);

    $arr_noice_color = hexrgb($captcha_noice_color);
    $image_noise_color = imagecolorallocate($image, $arr_noice_color['red'],
        $arr_noice_color['green'], $arr_noice_color['blue']);


    // generating the dots randomly in background //
    for( $i=0; $i<$random_dots; $i++ ) {
        imagefilledellipse($image, mt_rand(0,$image_width),
            mt_rand(0,$image_height), 2, 3, $image_noise_color);
    }


    // generating lines randomly in background of image //
    for( $i=0; $i<$random_lines; $i++ ) {
        imageline($image, mt_rand(0,$image_width), mt_rand(0,$image_height),
            mt_rand(0,$image_width), mt_rand(0,$image_height), $image_noise_color);
    }


    // create a text box and add 6 letters code in it //
    $textbox = imagettfbbox($font_size, 0, $font, $code);
    $x = ($image_width - $textbox[4])/2;
    $y = ($image_height - $textbox[5])/2;
    imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code);


    // Show captcha image in the page html page //
    header('Content-Type: image/jpeg');// defining the image type to be shown in browser widow
    imagejpeg($image);//showing the image
    imagedestroy($image);//destroying the image instance
    function hexrgb ($hexstr)
    {
        $int = hexdec($hexstr);

        return array("red" => 0xFF & ($int >> 0x10),
            "green" => 0xFF & ($int >> 0x8),
            "blue" => 0xFF & $int);
    }
    */
?>
	

 