<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\News
@ORM\Table(name="sports_news")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class News extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var text $content
	@ORM\Column(name="content", type="text")
	*/
	protected $content;
	/**
	@var string $name
	@ORM\Column(name="name", type="string")
	*/
	protected $name;
	/**
	@var text $summary
	@ORM\Column(name="summary", type="text")
	*/
	protected $summary;
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
	/**
	get summary attribute
	@return text $summary
	*/
	public function getSummary(){
		return $this->summary;
	}
	/**
	set summary attribute
	@return text $summary
	*/
	public function setSummary($value){
		$this->summary = $value;
		return $this;
	}
}
