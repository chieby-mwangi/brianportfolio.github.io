<?php 

$uri = $_SERVER['REQUEST_URI'];
// var_dump($uri);

if($uri === "/"){
    require "views/home.php";
}elseif($uri === "/timeline"){
    require "views/timeline.php";
}elseif($uri === "/about"){
    require "views/about.php";
}elseif($uri === "/techstack"){
    require "views/techstack.php";
}elseif($uri === "/projects"){
    require "views/project.php";
}else{
    require "views/404.php";
}

?>
