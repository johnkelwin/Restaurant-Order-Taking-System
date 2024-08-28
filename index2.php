<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i=1;
    $time=0;
     while($i)
     {
        $time+=1;
        echo $time;
        if($time ==10)
        {
            $i=0;
        }
     }

    ?>
</body>
</html>