<!DOCTYPE html>
<html>

<head>
    <title>PPO : Introduction</title>
</head>

<body>
    <h1>PPO : Introduction</h1>
</body>

</html>


<?php

class Voiture
{
    public string $modele;
    public string $marque;
    public int $vitesse = 0;
    
    public function setVitesse(int $vitesse){
    	if($vitesse<0){
    		$this->vitesse = 0;
    	}else{
    		$this->vitesse = $vitesse;
    	}
    }
   public function getVitesse(){
    	return $this->vitesse;
    }
    public function accelerer(int $vitesse){
    	$this->setVitesse($this->vitesse += $vitesse);
    }   
    
    public function __construct(string $marque, string $modele){
    	$this->marque = $marque;
	$this->modele = $modele;
    }
}


$maVoiture = new Voiture('Mercedes', 'GLS-Coupé');

echo ("<br> Modele: " . $maVoiture->modele );
echo ("<br> Marque: " . $maVoiture->marque);
echo ("<br> Vitesse avant: " . $maVoiture->vitesse);

$acceleration = 10;
echo ("<br> Acceleration: " . $acceleration);

$maVoiture->accelerer($acceleration);

echo ("<br> Vitesse apres: " . $maVoiture->vitesse);



class Personne{
	public string $nom;
	public string $prenom;
	public int $age;
	public function getNom(){
		return $this->nom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function setPrenom(string $prenom)
	{
		$this->prenom = $prenom;
	}
	public function setNom(string $nom){
		$this->nom = $nom;
	}
	public function setAge(int $age){
		$this->age = $age;
	}
	public function __construct(string $nom, string $prenom){
		$this->setNom($nom);
		$this->setPrenom($prenom);
	}
	public function afficherInformations(){
		return($this->nom." ".$this->prenom." ".$this->age." ans");
	}
}
$maPersonne = new Personne("John", "Smith");
$maPersonne->setAge(35);
echo("<br> Personne: " . $maPersonne->afficherInformations());

?>
</body>

</html>