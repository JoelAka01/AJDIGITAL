<?php 
    // class abstrait parcequ'on l' extensifie pas directement seul les class qui l'herite seront extentier 
abstract class Model{
    // $pdo est statique pour qu'il soit accessible part toute les class filles (celle aui eriterons de la class Model )
    private static $pdo;
    // stBdd permet de cree la connexion et de la placer dans l'attribut static
    private static function setBdd(){
        // construsteur de pdo
            self::$pdo = new PDO("mysql:host=localhost;dbname=ajdigital;charset=utf8","root","");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING );
    }
    // permet davoir des information accessible par les class files 
    // getBdd permet de tester si j'ai une connection qui est parametre ou non
    protected function getBdd(){
       if(self::$pdo=== null){
            self::setBdd();
       }
       return self::$pdo;
    }
}