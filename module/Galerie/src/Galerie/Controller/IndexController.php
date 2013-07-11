<?php
namespace Galerie\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
	private $log;
	
	private function getLog()
	{
		if (!$this->log) {
			$sm = $this->getServiceLocator();
			$this->log = $sm->get('myLog');
		}
		return $this->log;
	}
	
	public function indexAction()
	{
		$this->getLog()->info('Accès à la liste des galeries.');
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