<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\TeamPlayer
@ORM\Table(name="sports_teamPlayers")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class TeamPlayer extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var TJM\Bundle\SportsBundle\Entity\Grade
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Grade")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="grade"
			,referencedColumnName="id"
		)
	})
	*/
	protected $grade;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Person
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Person")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="person"
			,referencedColumnName="id"
		)
	})
	*/
	protected $person;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Position
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Position")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="position"
			,referencedColumnName="id"
		)
	})
	*/
	protected $position;
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
}
