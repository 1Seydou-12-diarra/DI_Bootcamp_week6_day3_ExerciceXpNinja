<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerciceNinja</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            
            function totalOvers( int $balls) : float | int | string 
            {
                $overs = floor($balls / 6);
                $ball = $balls % 6;
                return  (float) $overs .'.' .$ball;
              
            }
        echo totalOvers(164);
        ?>
    </body>
</html>  
</body>
</html>