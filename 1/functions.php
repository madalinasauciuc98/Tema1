<?php
function loadView($viewName)
{
   require $viewName;
}

function dd($parameter)
{
    echo "<pre>";
    var_dump($parameter);
    echo "</pre>";
    die;
}