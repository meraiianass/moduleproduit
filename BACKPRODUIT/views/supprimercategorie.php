<?php 
include_once '../core/CategorieC.php';
$p = new CategorieC();
if(isset($_GET['id']))
  $p->supprimerCategorie($_GET['id']);
?>
