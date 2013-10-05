<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 04.10.13
 * Time: 19:39
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends  Controller
{

	public function indexAction($name)
	{
		return new Response('<html><body>Hello '.$name.'!</body></html>');
	}

	public function testAction()
	{
		return $this->render('AcmeHelloBundle:Default:test.html.twig');
	}

}