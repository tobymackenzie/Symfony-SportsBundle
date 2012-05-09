<?php
namespace TJM\Bundle\SportsBundle\Controller;

use TJM\Bundle\BaseBundle\Controller\Controller;

class DefaultController extends Controller{
	public function indexAction(){
		$data = Array();
		return $this->renderPage(
			'TJMSportsBundle:default:index.html.twig'
			,$data
		);
	}
	public function testAction($parameters){
	}
}
