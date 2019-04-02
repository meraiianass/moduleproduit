<?PHP
include "config2.php";
class commandeC {

	function ajoutercommande($commande){
		$sql="insert into commande (id_client,ref_prod,prixtotal,quantite_prod,etat) values ( :id_client,:ref_prod,:prixtotal,:quantite,;etat)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$commande->getid_client();
        $ref_prod=$commande->getref_prod();
        $prixtotal=$commande->getprixtotal();
        $quantite=$commande->getquantite();
        $etat="en attente";
      
        
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':ref_prod',$ref_prod);
		$req->bindValue(':prixtotal',$prixtotal);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':etat',$etat);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	public function   affichercommandes()
	{
		try{
			$c = new Config2();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM commande where etat="En attente"');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function modifiercommande($quantite,$id){
		$sql="UPDATE commande SET quantite_prod=:quantite where id=:id";
		$db = config2::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		$req->bindValue(':quantite',$quantite);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		public function  getcommande()
	{
		try{
			$c = new Config2();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM commande where etat="En attente"');
			$stmt->execute();
			//$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $stmt;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	
}

?>