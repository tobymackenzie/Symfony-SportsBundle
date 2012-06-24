<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\Sport
@ORM\Table("sports_sports")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class Sport extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $name
	@ORM\Column(name="name", type="string")
	*/
	protected $name;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Season
	@ORM\ManyToMany(
		targetEntity="TJM\Bundle\SportsBundle\Entity\Season"
		,inversedBy="fooManyToManyInverseSide"
	)
	@ORM\JoinTable(
		name="sports_seasons_sports",
		joinColumns={
			@ORM\JoinColumn(
				name="season"
				,referencedColumnName="id"
			)
		},
		inverseJoinColumns={
			@ORM\JoinColumn(
				name="sport"
				,referencedColumnName="id"
			)
		}
	)
	*/
	protected $season;


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
