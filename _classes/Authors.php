<?php


class Authors {


    public $id;
    public $firstname;
    public $lastname;

    /**
     * constructor
     * @param $id
     */

    function __construct($id)
    { 
        global $db;
         
        $id = str_secur($id);
        $req = $db->prepare('SELECT * FROM `authors` WHERE id = :id ');
        $req->bindParam(':id',$id,PDO::PARAM_INT);
        $req->execute([$id]);

        $data = $req->fetch();
        $this->id=$id;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        
    }

    /**
     * 
     * Envoi de tous les auteurs
     * @return array
     */

   static function getAllAuthors(){

        global $db;
        $req = $db->prepare('SELECT * FROM `authors`');
        $req->execute([]);
        return $req->fetchAll();

   }
}