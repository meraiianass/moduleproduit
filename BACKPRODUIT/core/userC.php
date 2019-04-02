<?PHP
include "../views/config.php";
class UserC {

	function afficherUsers(){
		$sql="SElECT * from users";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function userStat(){
		$sql="SELECT
    COUNT(*) as number,
    EXTRACT(MONTH FROM trn_date) as month
	FROM
	    users
	GROUP BY
	     EXTRACT(MONTH FROM trn_date);
	     ";

		$db = config::getConnexion();
		try{
		$stat=$db->query($sql);
		return $stat;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function afficherDemande(){
		$sql="SElECT * from demande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	

	function demandesReactivation($email){
		$sql="UPDATE users SET etat=1 WHERE email=:email";
		$sql2 = " DELETE FROM `demande` WHERE email=:email ";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
	        $req=$db->prepare($sql);
	        $req2 = $db->prepare($sql2);

			$req->bindValue(':email',$email);
			$req2->bindValue(':email',$email);

	        $s=$req->execute();
	        $s2=$req2->execute();


				
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}

		function supprimerUser($id){
		$sql="DELETE FROM users where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function recupererUser($id){
		$sql="SELECT * from user where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierUser($username,$email,$password,$address,$phone,$id){
		$sql="UPDATE users SET username=:username,email=:email, password=:password, address=:address,phone=:phone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',md5($password));
		$req->bindValue(':address',$address);
		$req->bindValue(':phone',$phone);
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

		
	
}
?>
