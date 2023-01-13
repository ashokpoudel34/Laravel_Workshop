<html>
    <head>
        <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <?php
        echo "He".$x." Value of a: ".$a." and b: ".$b;
    ?>

    <hr>
    @if($a ==1)
        Hey
    @else
        Hii
    @endif

    <hr>

    @for($i=1;$i<10;$i++)
    <br>Test
    @endfor

    </body>
    </html>