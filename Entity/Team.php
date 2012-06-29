<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\Team
@ORM\Table(name="sports_teams")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class Team extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var TJM\Bundle\SportsBundle\Entity\Division
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Division")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="division", referencedColumnName="id")
	})
	*/
	protected $division;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Gender
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Gender")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="gender", referencedColumnName="id")
	})
	*/
	protected $gender;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Level
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Level")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="level", referencedColumnName="id")
	})
	*/
	protected $level;
	/**
	@var string $name
	@ORM\Column(name="name", nullable="true", type="string")
	*/
	protected $name;
	/**
	@var TJM\Bundle\SportsBundle\Entity\SchoolClub
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\SchoolClub")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="schoolClub", referencedColumnName="id")
	})
	*/
	protected $schoolClub;
	/**
	@var TJM\Bundle\SportsBundle\Entity\SchoolYear
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\SchoolYear")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="schoolYear", referencedColumnName="id")
	})
	*/
	protected $schoolYear;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Season
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Season")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="season", referencedColumnName="id")
	})
	*/
	protected $season;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Sport
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Sport")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="sport", referencedColumnName="id")
	})
	*/
	protected $sport;


	/*==========
	==basic
	==========*/
	// public function __construct(){
	// 	//--init many to many arrays

	// 	//--set defaults
	// }


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
