<?php
  require "include/init_twig.php";
  $css = "styleIndex";
  $script = "index";
  $title = "SERVICOMPACT: Nettoyage, Désinfection et Traitement Nuisibles";

  echo $twig->render('index.html.twig',
    	  array('css' => $css,
              'script' => $script,
              'title' => $title,
    				));

?>
