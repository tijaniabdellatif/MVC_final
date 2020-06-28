<?php 

class Categories {


    public $id;
    public $name;

    /**
     * constructor
     * @param $id
     */

    function __construct($id)
    { 
        global $db;
         
        $id = str_secur($id);
        $reqCat = $db->prepare('SELECT * FROM `categories` WHERE id = :id ');
        $reqCat->bindParam(':id',$id,PDO::PARAM_INT);
        $reqCat->execute([$id]);

        $data = $reqCat->fetch();
        $this->id=$id;
        $this->name = $data['name'];
     
        
    }

    /**
     * 
     * Envoi de tous les categories
     * @return array
     */

   static function getAllCat(){

        global $db;
        $reqCat = $db->prepare('SELECT * FROM `catgories`');
        $reqCat->execute([]);
        return $reqCat->fetchAll();

   }
}

