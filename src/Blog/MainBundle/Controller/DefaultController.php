<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// this imports the "@Route" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_index")
     */
    public function indexAction()
    {
		$categories = $this->getDoctrine()
		 ->getRepository('BlogMainBundle:Category')
		 ->findAll();
	
		if (!$categories) 
		{
			throw $this->createNotFoundException('No categories found');
		}
	
		$articles = $this->getDoctrine()
        ->getRepository('BlogMainBundle:BlogArticle')
        ->findAll();

		if (!$articles) 
		{
			throw $this->createNotFoundException('No articles found');
		}

        return $this->render('BlogMainBundle:Default:index.html.twig', array('articles' => $articles, 'categories' => $categories));
    }
}
