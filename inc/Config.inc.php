<?php

//Definir credenciaiS de acesso ao BD
//Contantes são variáveis de valores que não mudam

define('HOST','localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'bdpoo');

spl_autoload_register(function ($Class){
    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.class.php")){
        require("{$dirName}/{$Class}.class.php");
    }else{
        die("A classe {$Class}.class.php não encontrada");
    }

});