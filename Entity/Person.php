<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\Person
@ORM\Table(name="sports_persons")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class Person extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $firstName
	@ORM\Column(name="firstName", type="string")
	*/
	protected $firstName;
	/**
	@var string $lastName
	@ORM\Column(name="lastName", type="string")
	*/
	protected $lastName;


	/*==========
	==getters and setters
	==========*/
	/**
	get firstname attribute
	@return string $firstName
	*/
	public function getFirstName(){
		return $this->firstName;
	}
	/**
	set firstname attribute
	@return string $name
	*/
	public function setFirstName($value){
		$this->firstName = $value;
		return $this;
	}
	/**
	get lastname attribute
	@return string $lastName
	*/
	public function getLastName(){
		return $this->lastName;
	}
	/**
	set lastname attribute
	@return string $name
	*/
	public function setLastName($value){
		$this->lastName = $value;
		return $this;
	}
}
