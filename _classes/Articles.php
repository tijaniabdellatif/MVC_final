<?php

class Articles 

{

    public $id;
    public $title;
    public $sentence;
    public $content;
    public $date;
    public $author;
    public $category;

/**
 * Contructor
 *
 * @param [int] $id
 */
function __construct($id)
{
    global $db;

    $id=str_secur($id);

     $reqArticle = $db->prepare( 'SELECT a.*,au.firstname,au.lastname
     c.name AS category FROM articles a
     INNER JOIN authors au ON au.id = a.author_id 
     INNER JOIN categories c ON c.id = a.category_id 
     WHERE a.id = ? ');

     $reqArticle->execute([$id]);
     $data = $reqArticle->fetch();

        $this->id=$id;
        $this->title = $data['title'];
        $this->sentence = $data['sentence'];
        $this->content = $data['content'];
        $this->date = $data['date'];
        $this->author = $data['firstname']. ' '. $data['lastname'];
        $this->category = $data['category'];
}


/**
 * @return array
 */

static function getAllArticles(){
        global $db;

    

    $reqArticles = $db->prepare('SELECT a.*,au.firstname,au.lastname
     c.name AS category FROM articles a
     INNER JOIN authors au ON au.id = a.author_id 
     INNER JOIN categories c ON c.id = a.category_id 
      ');

        $reqArticles->execute([]);
        return  $reqArticles->fetchAll();

}


}