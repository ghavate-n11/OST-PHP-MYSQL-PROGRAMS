<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Boys
    {
        function level()
        {
            $level_name="High level";
            echo "Boys level :  ".$level_name;
        
        }
    }
    $obj=new Boys();//object creation
    $obj->level();//function calling
    
    ?>
    
</body>
</html>