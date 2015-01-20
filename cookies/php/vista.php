<?php
/**
 * Created by PhpStorm.
 * User: Francisco Luis Mentado Manzanares.
 * Date: 15/01/2015
 * Time: 11:53
 */
    if (!isset($_COOKIE['proteccionDatos'])) {
        if (isset($activarCookie) && $activarCookie) {
            setcookie('proteccionDatos', "mi cookie", time() + 60 * 60* 2 * 1); //sg*min*hr*day
        } else {
            $miCookie = ponerBloqueCookie();
        }
    }
?>