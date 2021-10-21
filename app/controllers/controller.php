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
    public static function Inicio(){
        cabecera();
        Nav();
        require_once 'app\views\modules\inicio.phtml';
        piedepagina();
    }
}
?>