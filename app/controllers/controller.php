<?php

function cabecera()
{
    require_once 'app\views\assets\header.html';
}

function Nav()
{
    require_once 'app\views\assets\nav.phtml';
}

function piedepagina()
{
    require_once 'app\views\assets\footer.html';
}


class controller
{
    //Inicio
    public static function Inicio()
    {
        cabecera();
        Nav();
        require_once 'app\views\modules\inicio.phtml';
        piedepagina();
    }


    //Condicionales
    public static function Condicionales()
    {
        cabecera();

        //Condicional de Valores
        $precio = 10000;
        $iva = 16;
        $venta = $precio + ($precio * $iva / 100);
        if ($venta >= 100000 && $venta <= 170000) {
            $mensaje = 'El precio Ideal';
        } elseif ($venta > 170000 && $iva > 0) {
            $mensaje = 'El precio Elevado';
        } elseif ($iva > 0) {
            $mensaje = 'El precio esta por debajo';
        } else {
            $mensaje = 'Debo validar que el iva sea mayor que cero';
        }

        //Condicional de Entrada Mostrada en la vista
        $entrada = false;
        Nav();
        require_once 'app\views\modules\condicionales.phtml';
        piedepagina();
    }
}
