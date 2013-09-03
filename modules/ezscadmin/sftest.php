<?php
/**
 * Simple module test to use Symfony
 */

$Module = $Params['Module'];
$Result = array();

$container = ezpKernel::instance()->getServiceContainer();
/** @var \Acme\TestBundle\Controller\AdminController $controller */
$controller = $container->get( 'my.admin.controller' );
$Result['content'] = $controller->myAdminAction( 'blabla' )->getContent();
