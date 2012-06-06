<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\Entity
@ORM\Table("sports_pages")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class Page extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $content
	@ORM\Column(name="content", type="text")
	*/
	protected $content;
	/**
	@var text $name
	@ORM\Column(name="name", type="text")
	*/
	protected $name;


	/*==========
	==getters and setters
	==========*/
	/**
	get content attribute
	@return text $content
	*/
	public function getContent(){
		return $this->content;
	}
	/**
	set content attribute
	@return text $content
	*/
	public function setContent($value){
		$this->content = $value;
		return $this;
	}
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
