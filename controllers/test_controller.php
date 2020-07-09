<?php

$allarticles = Articles::getAllArticles();
$allauthors = Authors::getAllAuthors();


debug($allarticles);
debug($allauthors);