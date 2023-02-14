<?php
require_once "class/postsManager.class.php";
class PostController{
    private $postsManager;

    public function __construct() {
        $this->postsManager= new PostManager;

    }

    public function afficherposts() {
        $posts=$this->postsManager->getPosts();
        if ($posts) {
            echo "Aucun article à afficher.";
        } else {
            include "views/posts.view.php";
        }
    }
    
    public function getArticle($id) {
            $post= $this->postsManager->getPostById($id); 
            require "views/afficherpost.view.php";
            
    }
    
   }


?>