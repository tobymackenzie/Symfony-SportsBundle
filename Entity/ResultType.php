<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\ResultType
@ORM\Table(name="sports_resultTypes")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class ResultType extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $name
	@ORM\Column(name="name", type="string")
	*/
	protected $name;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Sport
	@ORM\ManyToMany(targetEntity="TJM\Bundle\SportsBundle\Entity\Sport")
	@ORM\JoinTable(
		name="sports_resultTypes_sports",
		joinColumns={
			@ORM\JoinColumn(
				name="sport"
				,referencedColumnName="id"
			)
		},
		inverseJoinColumns={
			@ORM\JoinColumn(
				name="resultType"
				,referencedColumnName="id"
			)
		}
	)
	*/
	protected $sports;


	/*==========
	==getters and setters
	==========*/
	/**
	get name attribute
	@return string $name
	*/
	public function getName(){
		return $this->name;
	}
	/**
	set name attribute
	@return string $name
	*/
	public function setName($value){
		$this->name = $value;
		return $this;
	}
}
