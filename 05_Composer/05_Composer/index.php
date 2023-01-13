<?php

    require 'vendor/autoload.php';

    use Dompdf\Dompdf;
    use Carbon\Carbon;

    $c =  Carbon::createFromDate(1988, 11, 13);
    $c2 =  Carbon::createFromDate(2022, 11, 13);

    $st = "My age is : ". $c->age;
    $st .= "MY last bday was ".$c2->diffForHumans()." ago";

    $dompdf = new Dompdf();
    $dompdf->loadHtml($st);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();

?>