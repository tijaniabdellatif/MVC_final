<?php

// $allarticles = Articles::getAllArticles();
// $allauthors = Authors::getAllAuthors();


// debug($allarticles);
// debug($allauthors);

//manipulation de fetch
$article = $DB->fetch('SELECT * FROM articles',[],false);
// $result = $DB->execute('DELETE * FROM articles where',[] //filter);
// debug($result);
debug($article);

//a brief from of pdo 
// $req = $DB->prepare('requete');
// $req->execute();
// $values = $req->fetchAll();