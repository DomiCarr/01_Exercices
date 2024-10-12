<?php
namespace personne;
class Personne{
private string $nom; 
 
public function getNom() : string{
return $this->nom; 
} 
 
public function setNom(string $nom) {
$this->nom = $nom; 
} 
 
private string $prenom; 
 
public function getPrenom() : string{
return $this->prenom; 
} 
 
public function setPrenom(string $prenom) {
$this->prenom = $prenom; 
} 
 
private int $age; 
 
public function getAge() : int{
return $this->age; 
} 
 
public function setAge(int $age) {
$this->age = $age; 
} 
 
public function __construct(string $nom,string $prenom,int $age) { 
$this->setNom($nom); 
$this->setPrenom($prenom); 
$this->setAge($age); 
} 
} 
?> 
 
