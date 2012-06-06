<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\BaseBundle\Entity\Entity as BaseEntity;

/**
TJM\Bundle\SportsBundle\Entity\Entity
@ORM\Table("sports_items")
@ORM\InheritanceType("JOINED")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
@ORM\DiscriminatorColumn(name="itemType", type="string")
@ORM\DiscriminatorMap({
	"division" = "Division"
	,"event" = "Event"
	,"eventType" = "EventType"
	,"file" = "File"
	,"fileType" = "FileType"
	,"gender" = "Gender"
	,"level" = "Level"
	,"location" = "Location"
	,"news" = "News"
	,"page" = "Page"
	,"person" = "Person"
	,"personType" = "PersonType"
	,"position" = "Position"
	,"result" = "Result"
	,"resultType" = "ResultType"
	,"schoolClub" = "SchoolClub"
	,"schoolYear" = "SchoolYear"
	,"season" = "Season"
	,"sport" = "Sport"
	,"team" = "Team"
	,"teamPlayer" = "TeamPlayer"
})
*/
class Item extends BaseEntity{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var integer $id
	@ORM\Column(name="unid", type="integer", nullable=false, columnDefinition="integer unsigned")
	@ORM\Id
	@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;


	/*==========
	==getters and setters
	==========*/
	/**
	get id attribute
	@return integer $unid
	*/
	public function getId(){
		return $this->id;
	}
}
