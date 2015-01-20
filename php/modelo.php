<?php
     /**
     * Created by PhpStorm.
     * User: Francisco Luis Mentado
     * Date: 08/12/2014
     * Time: 8:40
     */
    if (!function_exists ('decode') || @decode (KEY_PASS) != @CLAVE) {
        die("No se ha podido ejecutar la web.");
    }

    //////////////////////////////////////////////////////////////////////////////////////////////
    // FUNCIONES ENCRIPTACION
    //////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Codifica la cadena de entrada al sistema base64.
     *
     * @param $cadena tipo String cadena a codificar.
     *
     * @return string cadena codificada.
     */
    function encode ($cadena) {
        return base64_encode ($cadena);
    }


    /**
     * Decodifica la cadena de entrada al sistema base64.
     *
     * @param $cadena tipo string cadena a decodificar.
     *
     * @return string Cadena decodificada.
     */
    function decode ($cadena) {
        return base64_decode ($cadena);
    }
   ?>