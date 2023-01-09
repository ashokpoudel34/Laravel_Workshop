<?php
    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
        //require 'foldername/'.$class_name . '.php';
    });

    $t = new one();
    $t->show();

    $t2 = new two();
    $t2->show();

?>