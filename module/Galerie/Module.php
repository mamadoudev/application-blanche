<?php
namespace Galerie;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements AutoloaderProviderInterface
{
	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\ClassMapAutoloader' => array(
					__DIR__ . '/src/' . '/autoload_classmap.php',
				),
				'Zend\Loader\StandardAutoloader' => array(
					'namespace' => array(
						__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
					),
				)
		);
	}
}