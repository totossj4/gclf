<?php

require 'inc/config.php';

use inc\model\Film;

$currentId = 0;
$filmInfos = array();

if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);
}
$filmSingle = Film::getMovieDetail($currentId);
//print_r($filmSingle);

require 'inc/view/html/header.php';
//var_dump($filmSingle);
if($filmSingle->getId() != NULL){
	require 'inc/view/details.php';
}else{
	header("Location: localhost/gclf/404.php");
	//echo "Film inexistant!!";
}

require 'inc/view/html/footer.php';