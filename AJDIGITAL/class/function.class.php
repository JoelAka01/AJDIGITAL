<?php
class Tools extends Model{
    /**
    * Filtre une chaîne de caractères pour éviter les injections XSS
    *
    * @param string $data La chaîne à filtrer
    * @return string La chaîne filtrée
    */
    public function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
}