<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=3;
    function factorial($n)
    {
        if($n==0)
        {
            return 1;
        }
        return $n*factorial($n-1);
    }
    echo "FACTORIAL OF $n is:".factorial($n);
    ?>
    
</body>
</html>