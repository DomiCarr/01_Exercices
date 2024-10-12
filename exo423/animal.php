<?php
namespace animal;
class Animal{
private string $espece; 
 
public function getEspece() : string{
return $this->espece; 
} 
 
public function setEspece(string $espece) {
$this->espece = $espece; 
} 
 
private string $nom; 
 
public function getNom() : string{
return $this->nom; 
} 
 
public function setNom(string $nom) {
$this->nom = $nom; 
} 
 
public function __construct(string $espece,string $nom) { 
$this->setEspece($espece); 
$this->setNom($nom); 
} 
} 
?> 
 
