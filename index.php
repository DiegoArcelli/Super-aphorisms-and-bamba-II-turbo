<?php
		$found = 0;
		while($found == 0){
			$file = fopen("Perle_di_saggezza","r");
			$lasts = fopen("lasts","r");
	    $num = rand(0,56);
	    $cont = 0;
			$check = 0;
	    while(($line = fgets($file)) !== false && $check == 0){
        if($cont == $num){
            $perla = $line;
						while(($line_lasts = fgets($lasts)) !== false && $check == 0){
							if($line_lasts == $perla){
								$check = 1;
							}
						}
						if($check == 0){
							$found = 1;
						}
        }
        $cont++;
	    }
			fclose($file);
			fclose($lasts);
			$lasts = fopen("lasts","r");
			$new_text = "";
			$c = 0;
			while(($line = fgets($lasts)) !== false){
				if($c != 0){
					$new_text .= $line;
				}
				$c = 1;
			}
			$new_text .= $perla;
			fclose($lasts);
			$lasts = fopen("lasts","w");
			fwrite($lasts, $new_text);
			fclose($lasts);
		}
?>
<html>
    <head>
        <title>Perle del Profeta</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
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
            var x = Math.floor(Math.random()*30);
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
