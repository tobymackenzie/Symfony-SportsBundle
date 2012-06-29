<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/*
TJM\Bundle\SportsBundle\Entity\EventTeam
@ORM\Table(name="sports_eventTeams")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class EventTeam extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var TJM\Bundle\SportsBundle\Entity\Event
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Event")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="event"
			,referencedColumnName="id"
		)
	})
	*/
	protected $event;
	/**
	@var TJM\Bundle\SportsBundle\Entity\Result
	@ORM\ManyToOne(targetEntity="TJM\Bundle\SportsBundle\Entity\Result")
	@ORM\JoinColumns({
		@ORM\JoinColumn(
			name="result"
			,referencedColumnName="id"
		)
	})
	*/
	protected $result;
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
