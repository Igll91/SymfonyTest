<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
	
	/**
     * @Route("/spremiKategoriju", name="_newCategory")
     */
	public function newCategory(Request $request)
	{
		if ($request->getMethod() == 'POST') 
		{
			$text = $request->get('newCategoryText');
			
			// Provjeriti string treba, postaviti variable određene i returnati se od kud smo i pozvani, ovo je samo test trenutno
			
			return $this->render('BlogMainBundle:Default:test.html.twig', array('text' => $text));
		}
		
		return;
	}
}
