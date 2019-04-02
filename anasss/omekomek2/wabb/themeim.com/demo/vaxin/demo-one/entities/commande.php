<?PHP
class Commande{
	private $reference;
	private $id_client;
	private $ref_prod;
	private $quantite;
	private $prix;
	private $etat ;
	
	function __construct($reference,$id_client,$ref_prod,$prix,$etat){
		$this->reference=$reference;
		$this->id_client=$id_client;
		$this->ref_prod=$ref_prod;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->etat=$etat;	
	}
	
	function getreference(){
		return $this->reference;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getref_prod(){
		return $this->ref_prod;
	}
	
	function getprix(){
		return $this->prix;
	}
	function getquantite()
	{
		return $this->quantite;
	}

	function getetat()
	{
		return $this->etat;
	}

	function setref_prod($ref_prod){
		$this->ref_prod=$ref_prod;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setquantite($quantite)
	{
		$this->quantite=$quantite;
	}
	
	function setetat($etat)
	{
		$this->etat=$etat;
	}
	
	
}

?>