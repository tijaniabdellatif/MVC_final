<?php 


include_once '_classes/Articles.php';
include_once '_classes/Categories.php';

$allArticles = Articles::getAllArticles();
$allCategories = Categories::getAllCategories();
$lastArticle = Articles::getLastArticles();

$lastArticleleft = Articles::getLastArticles(5);
$lastArticleright = Articles::getLastArticles(3);

//  debug(Articles::getLastArticles()); //Array into another array
//  exit;

// debug(Articles::getLastArticles(5));
// exit;
