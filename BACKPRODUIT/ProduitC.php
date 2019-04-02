<?php 
include_once 'config.php';
class ProduitC{
public function ajouterProduit($produit)
	{
		try{
			$it = $produit->getImageTmp();
			$i = $produit->getImage();
			//move the uploaded pictures
			move_uploaded_file($it,"../uploads/$i");
			
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT INTO produit(nom, prix, description, image, quantite,reference) 
									  VALUES (:n,:p,:d,:i,:q,:r)');
			$n = $produit->getNom();
			$p = $produit->getPrix();
			$d = $produit->getDescription();
			$i = $produit->getImage();
			$q = $produit->getQuantite();
			$r = $produit->getReference();
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':d', $d);
			$stmt->bindparam(':i', $i);
	/*		$stmt->bindparam(':c',$this->categorie);
			$stmt->bindparam(':sc',$this->sous_cat);*/
			$stmt->bindparam(':q', $q);
			$stmt->bindparam(':r', $r);

			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function   afficherProduit()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit ');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}

	public function afficherProduitParId($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit WHERE id = :id');
			$stmt->bindparam(":id",$id);
			$stmt->execute();
		 	return $stmt->fetch(PDO::FETCH_ASSOC);

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	public function supprimerProduit($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('DELETE FROM produit WHERE id = :id');
			$stmt->bindparam(":id",$id);
			if($stmt->execute())
				header('location: afficherproduit.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function ModifierProduit($produit){
		try{
			$n = $produit->getNom();
			$p = $produit->getPrix();
			$d = $produit->getDescription();
			$i = $produit->getId();
			$q = $produit->getQuantite();
			$r = $produit->getReference();

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('UPDATE produit SET nom = :n, prix = :p, description = :d, quantite = :q ,reference = :r WHERE id = :id');
			
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':d', $d);
			$stmt->bindparam(':q', $q);
			$stmt->bindparam(':r', $r);
			$stmt->bindparam(':id', $i);
			if($stmt->execute())
				header('location: afficherproduit.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

		public function chercherProduit($nom){
		$c = new Config();
		$driver = $c->getConnexion();
		$stmt = $driver->prepare("SELECT * FROM produit WHERE  nom LIKE:n");
		$stmt->bindparam(':n', $n);
		$stmt->execute();
		//var_dump($liste);
		$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;
	}

		public function afficherLocation()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT location FROM events ');
			$stmt->execute();
			$locations=$stmt->fetchAll();

			return $locations;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}
}

 ?>