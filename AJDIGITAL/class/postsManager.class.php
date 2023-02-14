<?php
require_once "class/Model.class.php";
require_once "Post.class.php";
require_once "class/function.class.php";
class PostManager extends Model{
    private $posts;//tableau de Posts
    private $tools;
    public function __construct(){;
        $this->tools=new Tools;
   }
    public function ajoutPost($Post){
        $this->posts[] = $Post;

    }

    public function getposts(){
        return $this->posts;
    }
    
    public function chargementProjets(){
        // requet de recuperation des data dans la BDD
        $req= $this->getBdd()->prepare("SELECT* FROM project");
        $req->execute();
        // recupperation en tableau associatif dans la variable $mesposts
        $mesPosts=$req->fetchAll(PDO::FETCH_ASSOC);
        // fermeture pour l'execution de nouvelle requete
        $req->closeCursor();
        // generation des datas qui vont etre ajouter dans le tableau $Post
        foreach($mesPosts as $post){
            $p= new Post($post['id'],$post['image'],$post['title'],$post['description'],$post['date']);
            $this->ajoutPost($p);
            
        }

    }

    public function getPostById($id){
        for($i=0;$i < count($this->posts);$i++ ){
            
            if ($this->posts[$i]->getId()===$id){
                return $this->posts[$i];
            }
        }
        throw new Exception('this Post No exist');
    }

    public function ajoutPostBd($image,$title,$description,$date){
        $req="
        INSERT INTO project (image,title,description,date)
        values (:image, :title, :description,:date)";
        $stmt= $this->getBdd()->prepare($req);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->bindValue(":date",$date,PDO::PARAM_INT);
        $stmt->execute();
        $resultat= $stmt->closeCursor();
        if($resultat > 0){
            $Post= new Post($this->getBdd()->lastInsertId(),$image,$title,$description,$date);
            $this->ajoutPost($Post);
        }
    }

    // public function suppressionPostBD($id){
    //     $req ="
    //     DELETE from  Post where id = :idPost";
    //     $stmt=$this->getBdd()->prepare($req);
    //     $stmt->bindValue(":idPost",$id,PDO::PARAM_INT);
    //     $resultat=$stmt->execute();
    //     $stmt->closeCursor();
    //     if($resultat >0){
    //     $Post= $this->getPostById($id);
    //         unset( $Post);

    //     }
    // }
    
    // public function modificationPostBD($id,$image,$title,$description){
    //     $req ="
    //     UPDATE Post 
    //     SET  image= :image, title= :title, description= :description 
    //     where id= :id
    //     ";
    //     $stmt=$this->getBdd()->prepare($req);
    //     $stmt->bindValue(":id",$id,PDO::PARAM_INT);
    //     $stmt->bindValue(":image",$image,PDO::PARAM_STR);
    //     $stmt->bindValue(":title",$title,PDO::PARAM_STR);
    //     $stmt->bindValue(":description",$description,PDO::PARAM_STR);
    //     $stmt->execute();
    //     $resultat=$stmt->execute();
    //     if($resultat >0){
    //         $this->getPostById($id)->setimage($image);
    //         $this->getPostById($id)->settitle($title);
    //         $this->getPostById($id)->setdescription($description);


    //     }
    // }
    }


 ?>
