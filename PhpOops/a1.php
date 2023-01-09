<?php
    require 'Abc/one.php';
    require 'Pqr/one.php';

    //use Abc\One;
    //use Pqr\One;

    $t1 = new Abc\One();
    $t2 = new Pqr\One();

    $t1->show();
    $t2->show();

?>