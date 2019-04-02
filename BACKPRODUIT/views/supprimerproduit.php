<?php 
include_once '../core/ProduitC.php';
$p = new ProduitC();
if(isset($_GET['id']))
  $p->supprimerProduit($_GET['id']);
?>
