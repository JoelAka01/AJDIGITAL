<?php 
session_start();

define("URL",str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https": "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controller/PostController.controller.php";
require_once "class/postsManager.class.php";


$postController= new PostController;
$postsManager=new PostManager;

try{
    if(empty($_GET["page"])){
        require "views/accueil.view.php";
    }else{
        $url=explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
    
        switch($url[0]){
            case "accueil": require "views/accueil.view.php";
            break;
            case "prix": require "views/prix.view.php";
            break;
            case "contacter": require "views/prix.view.php";
            break;
            case "posts":   
            if(empty($url[1])){
                 $postController->afficherposts();
            }else if($url[1]==="p"){
                $postController->getArticle($url[2]);

            } else{
                throw new Exception("la page n'exite pas ");
            }
            break;
                default: throw new Exception("la page n'exite pas ");


        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
 }
 
?>