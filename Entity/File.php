<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\File
@ORM\Table("sports_files")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class File extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $name
	@ORM\Column(name="name", type="string")
	*/
	protected $name;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Team
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Team")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="team"
			,referencedColumnName="id"
		)
	})
	*/
	protected $team;


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
