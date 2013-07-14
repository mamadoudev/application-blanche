<?php
namespace Galerie\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
	
	public function indexAction()
	{
	    
		$this->getServiceLocator()->get('\Log')->info('Accès à la liste des galeries.');
		return array();
	}
	
	public function editAction()
	{
		return array();
	}
	
	public function delAction()
	{
		return array();
	}
	
	public function viewAction()
	{
		return array();
	}
}