<?php 

function cabecera(){
    require_once 'app\views\assets\header.html';
}

function Nav(){
    require_once 'app\views\assets\nav.phtml';
}

function piedepagina(){
    require_once 'app\views\assets\footer.html';
}


class controller
{
    //Inicio
    public static function Inicio(){
        cabecera();
        Nav();
        require_once 'app\views\modules\inicio.phtml';
        piedepagina();
    }


    //Condicionales
    public static function Condicionales(){
        cabecera();
        Nav();
        require_once 'app\views\modules\condicionales.phtml';
        piedepagina();
    }
}
?>