<?php
class Dream
{
    function display()
    {
        echo "TO GET JOB WITH 40LPA IS A DREAM";
    }
}
class Fancode extends Dream
{
    function show()
    {
        echo "THIS IS POSSIBLE WHEN DEDICATION, CONSISTENCY, PATIENCE";
    }
}

// Create an object of the Fancode class
$obj = new Fancode();
$obj->show();
?>
