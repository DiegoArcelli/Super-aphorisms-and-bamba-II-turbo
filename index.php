<?php
    $file = fopen("Perle_di_saggezza","r");
    $num = rand(0,25);
    $cont = 0;
    while(($line = fgets($file)) !== false){
        if($cont==$num){
            $perla = $line;
        }
        $cont++;
    }
    fclose($file);
?>
<html>
    <head>
        <title>Perle del Profeta</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                background-repeat: no-repeat;
                background-size: cover;
            }
            #perla {
                right: 50%;
                bottom: 50%;
                transform: translate(50%,50%);
                position: absolute;
                background-color: rgba(0, 0, 0, 0.5);
                font-family: ubuntu;
                display: inline-block;
                font-weight: bold;
                padding: 20px;
                border-radius: 10px;
                font-size: 30px;
                color: white;
            }
        </style>
    </head>
    <body>
        <script>
            var x = Math.floor(Math.random()*31);
            var c = 0;
            $(document).ready(function(){
                $("body").css("background-image","url(Foto/" + x + ".gif)");
                $("#perla").fadeIn();
            });
        </script>
        <center>
            <div id="perla">
                <span><?php echo $perla; ?></span><br>
            </div>
        </center>
    </body>
</html>
