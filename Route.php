<?php
$path = $_SERVER["REQUEST_URI"];
$path ="/".basename($path);
//echo $path;
switch($path){
    case '/':
        require_once __DIR__."/View/public/index.php";
        break;
    case '/oop':
        require_once __DIR__."/View/public/index.php";
        break;
    case '/data.php':
        require_once __DIR__."/View/public/data.html";
        break;
        case '/oop/olu.html':
            require_once __DIR__."/View/public/olu.html";
        break;
            
}
?>