<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blog\MainBundle\Entity\Category;
use Blog\MainBundle\Entity\BlogArticle;

// this imports the "@Route" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	const CATEGORY_REQUEST_KEY = 'category';

    /**
     * @Route("/", name="_index")
     */
    public function indexAction(Request $request)
    {
		$categories = $this->getCategories();
	
		$query = $this->getDoctrine()->getEntityManager()
			->createQuery(
				'SELECT art FROM BlogMainBundle:BlogArticle art ORDER BY art.id DESC'
			);
	
		$articles = $query->getResult();

		if (!$articles) 
		{
			throw $this->createNotFoundException('No articles found');
		}
		
		$message = $request->get(self::CATEGORY_REQUEST_KEY);
		
        return $this->render('BlogMainBundle:Default:index.html.twig', array('articles' => $articles, 'categories' => $categories, 'message' => $message));
    }
	
	/**
     * @Route("/spremiKategoriju", name="_newCategory")
     */
	public function newCategory(Request $request)
	{
		if ($request->getMethod() == 'POST') 
		{
			$path = $request->getScriptName();
		
			$text = $request->get('newCategoryText');
			
			if(empty( $text ))
			{
				$error = "CATEGORY STRING VALUE CAN NOT BE EMPTY!";
				return $this->render('BlogMainBundle:Default:error.html.twig', array('error' => $error, 'path' => $path));
			}
			
			if(strlen( $text) > 15)
			{
				$error = "CATEGORY STRING VALUE CAN NOT HAVE MORE THAN 15 CHARACTERS!";
				return $this->render('BlogMainBundle:Default:error.html.twig', array('error' => $error, 'path' => $path));
			}
			
			$category = $this->findCategoryByName($text);
			
			if ($category != null) 
			{
				$message = "Već postoji kategorija sa tim imenom!";
				return $this->redirect($this->generateUrl('_index', array(self::CATEGORY_REQUEST_KEY => $message)));
			}
			
			$category = new Category();
			$category->setName($text);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($category);
			$em->flush();
			
			$message = "Nova kategorija je uspješno pohranjena.";
			return $this->redirect($this->generateUrl('_index', array(self::CATEGORY_REQUEST_KEY => $message)));
		}
		
		return;
	}
	
	private function findCategoryByName($name)
	{
		$query = $this->getDoctrine()->getEntityManager()
			->createQuery(
				'SELECT cat FROM BlogMainBundle:Category cat
				WHERE cat.name = :name'
			)->setParameter('name', $name);

		try 
		{
			return $query->getSingleResult();
		} 
		catch (\Doctrine\ORM\NoResultException $e) 
		{
			return null;
		}
	}
	
	private function findCategoryById($id)
	{
		$query = $this->getDoctrine()->getEntityManager()
			->createQuery(
				'SELECT cat FROM BlogMainBundle:Category cat
				WHERE cat.id = :id'
			)->setParameter('id', $id);

		try 
		{
			return $query->getSingleResult();
		} 
		catch (\Doctrine\ORM\NoResultException $e) 
		{
			return null;
		}
	}
	
	private function findArticleById($id)
	{
		$query = $this->getDoctrine()->getEntityManager()
			->createQuery(
				'SELECT art FROM BlogMainBundle:BlogArticle art
				WHERE art.id = :id'
			)->setParameter('id', $id);

		try 
		{
			return $query->getSingleResult();
		} 
		catch (\Doctrine\ORM\NoResultException $e) 
		{
			return null;
		}
	}
	
	private function getCategories()
	{
		$categories = $this->getDoctrine()
		 ->getRepository('BlogMainBundle:Category')
		 ->findAll();
	
		if (!$categories) 
		{
			throw $this->createNotFoundException('No categories found');
		}
		
		return $categories;
	}
	
	/**
     * @Route("/newBlog", name="_blog")
     */
	public function newBlog(Request $request)
	{
		$path = $request->getScriptName();
		
		$categories = $this->getCategories();
		
		$message = "";
		
		return $this->render('BlogMainBundle:Default:blog.html.twig', array('path' => $path, 'categories' => $categories, 'message' => $message));
	}
	
	/**
     * @Route("/saveBlog", name="_blogSave")
     */
	public function saveBlog(Request $request)
	{
		if ($request->getMethod() == 'POST') 
		{
			$title = $request->get("title");
			$text = $request->get("blogText");
			$categoryID = $request->get("category");
			
			$category = $this->findCategoryById($categoryID);
			
			if($title == "" || $text == "" || $category == null || strlen($title) > 30 || strlen($text) > 500)
			{
				$path = $request->getScriptName();
				$categories = $this->getCategories();
				$message = "Check your field values!";
				return $this->render('BlogMainBundle:Default:blog.html.twig', array('path' => $path, 'categories' => $categories, 'message' => $message));
			}
			
			$article = new BlogArticle();
			$article->setTitle($title);
			$article->setText($text);
			$article->setCategory($category);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();
			
			$message = "Uspješno je unesen novi zapis u Blog!";	
			return $this->redirect($this->generateUrl('_index', array(self::CATEGORY_REQUEST_KEY => $message)));
		}
	}
	
	/**
     * @Route("/editBlog", name="_blogEdit")
     */
	public function editBlog(Request $request)
	{
		$path = $request->getScriptName();
		$message = "";
		
		$id = $request->get("id");
		
		$article = $this->findArticleById($id);
		
		if($article == null)
		{
			throw $this->createNotFoundException('No article found');
		}
		
		$categories = $this->getCategories();
		
		return $this->render('BlogMainBundle:Default:editBlog.html.twig', array('path' => $path, 'categories' => $categories, 'article' => $article, 'message' => $message));
	}
	
	
	/**
     * @Route("/deleteBlog", name="_blogDelete")
     */
	public function deleteBlog(Request $request)
	{	
		if ($request->getMethod() == 'POST') 
		{
			$id = $request->get("id");
			
			$em = $this->getDoctrine()->getManager();
			$article = $em->getRepository('BlogMainBundle:BlogArticle')->find($id);

			if (!$article) {
				throw $this->createNotFoundException(
					'No article found for id '.$id
				);
			}

			$em->remove($article);
			$em->flush();
			
			$message = "Uspješno je obrisan Blog!";	
			return $this->redirect($this->generateUrl('_index', array(self::CATEGORY_REQUEST_KEY => $message)));
		}
	}
	
	/**
     * @Route("/updateBlog", name="_blogUpdate")
     */
	public function updateBlog(Request $request)
	{
		if ($request->getMethod() == 'POST') 
		{
			$id = $request->get("id");
			$title = $request->get("title");
			$text = $request->get("blogText");
			$categoryID = $request->get("category");
			
			$category = $this->findCategoryById($categoryID);
			
			if($title == "" || $text == "" || $category == null || strlen($title) > 30 || strlen($text) > 500)
			{
				$path = $request->getScriptName();
				$categories = $this->getCategories();
				$message = "Check your field values!";
				$article = $this->findArticleById($id);
				return $this->render('BlogMainBundle:Default:editBlog.html.twig', array('path' => $path, 'categories' => $categories, 'article' => $article, 'message' => $message));
			}
			
			$em = $this->getDoctrine()->getManager();
			$article = $em->getRepository('BlogMainBundle:BlogArticle')->find($id);

			if (!$article) {
				throw $this->createNotFoundException(
					'No article found for id '.$id
				);
			}

			$article->setTitle($title);
			$article->setText($text);
			$article->setCategory($category);
			$em->flush();
			
			$message = "Uspješno je promijenjen zapis u Blogu!";	
			return $this->redirect($this->generateUrl('_index', array(self::CATEGORY_REQUEST_KEY => $message)));
		}
	}
}
