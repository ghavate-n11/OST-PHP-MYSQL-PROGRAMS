<?php
class grandfather
{
function name()
{
    echo "THIS IS THE NAME OF FATHER";
}
}
class father extends grandfather
{
    function age()
    {
        echo "THIS IS THE AGE OF THE SON";
    }
}
class son extends father
{
    function job()
    {
        echo "THIS IS THE JOB OF THE SON";
    }
}

$obj1= new grandfather();
$obj1->name();

$obj2= new son();
$obj2->job();
?>