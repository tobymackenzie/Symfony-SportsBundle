<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\Event
@ORM\Table(name="sports_events")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class Event extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var text $description
	@ORM\Column(
		name="description"
		,type="text"
	)
	*/
	protected $description;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Location
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Location")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="location"
			,referencedColumnName="id"
		)
	})
	*/
	protected $location;
	/**
	@var string $name
	@ORM\Column(
		name="name"
		,type="string"
	)
	*/
	protected $name;
	/**
	@var string $summary
	@ORM\Column(
		name="summary"
		,type="string"
	)
	*/
	protected $summayr;


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
		return $this->name = $value;
	}
}
