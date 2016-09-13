<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
		$em = $this->getDoctrine()->getManager();
		$pages = $em->getRepository('AppBundle:Page')->findAll();
        return $this->render('AppBundle:Default:index.html.twig',array(
			'pages'=>$pages
		));
    }
	
	 /**
     *
     * @Route("/page/{id}", name="page_display")
     */
    public function displayAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$page = $em->getRepository('AppBundle:Page')->find($id);
		return $this->render('AppBundle:Default:display.html.twig',array(
			'page'=>$page
		));
    }
}
