<?php
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

include_once '_classes/Authors.php';
include_once '_classes/Articles.php';
include_once '_classes/Categories.php';
include_once '_classes/AutoLoader.php';
Autoloader::register();

// $var = new Authors(1);
// $var1 = new Categories(1);
// $var3= new Articles(2);
// debug($var);
// debug($var1);
// debug($var3);

// $test = Categories::getAllCategories();
// $testp = Authors::getAllAuthors();
// $testm = Articles::getAllArticles();
// debug($testm);
// exit;

// debug(['hello','world']);
// exit;

// echo '<h1>hello</h1>';
//  echo debug(str_secur('<h1>hello</h1>'));

// debug($_GET);
// //on test sur l'url /contact?action=send
// exit;


/**
 * 
 * AutoLoader des classes 
 */

 //creation d'un fonction anonyme autoload
//  spl_autoload_register(function ($class){

//     include_once '_classes/' . $class . '.php';


//  });


 // test if function exist 
//  if(function_exists('__autoload')){

//     echo 'ok exit';
//  }
// //   //la mauvaise maniere and deprecated reecrire la fonction autolaad
// //  function __autoload($class){
   
//     include_once '_classes/'.$class.'.php';

//  }

//definition de la page courante
if(isset($_GET['page']) AND !empty($_GET['page'])){
   $page = trim(strtolower($_GET['page'])); //HOME

}
else {
$page = 'home';
}

if($_GET['page']== 'home'){
    $message = "welcome";
}
else{

    $message= "Get in touch";
}

//array contenant toutes les pages
$allpages = scandir('controllers/');
// var_dump($allpages);

if(in_array($page.'_controller.php',$allpages)){
    //inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';
}else {
    //return error
    echo 'Erreur 404';
}
