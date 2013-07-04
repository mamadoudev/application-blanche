<?php
namespace Galerie;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

use Zend\EventManager\EventInterface;
use Zend\Mvc\ModuleRouteListener;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface, BootstrapListenerInterface
{
	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\ClassMapAutoloader' => array(
					__DIR__ . '/config' . '/autoload_classmap.php',
				),
				'Zend\Loader\StandardAutoloader' => array(
					'namespace' => array(
						__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
					),
				)
		);
	}
	
	public function getConfig()
	{
		return include __DIR__ .'/config' . '/module.config.php';
	}
	
	public function onBootstrap(EventInterface $e)
	{
		$translator = $e->getApplication()->getServiceManager()->get('translator');
	}
}