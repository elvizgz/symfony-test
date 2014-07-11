<?php

namespace SymfonyZgz\EjemploBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EjemploController extends Controller
{
/*    public function indexAction()
    {
    	$results = $this->getDoctrine()->getRepository('EjemploBundle:Ejemplo')->findAll();
        return $this->render('EjemploBundle:Ejemplo:index.html.twig',array('results'=>$results));
    }
    
    public function newAction()
    {
    	$ejemplo = new Ejemplo();
    	$form = $this->createForm(new EjemploType(), $ejemplo);
    	$request = $this->getRequest();
    	$form->handleRequest($request);
    	
    	if ($form->isSubmitted()) 
    	{
    		
    	}
    }
    
    public function viewAction($id)
    {
    	$prueba = $this->getDoctrine()->getRepository('EjemploBundle:Ejemplo')->find($id);
    	
    	return $this->render('EjemploBundle:Ejemplo:view.html.twig',array('prueba'=>$prueba));
    }
    
    public function editAction($id)
    {
    	$prueba = $this->getDoctrine()->getRepository('EjemploBundle:Ejemplo')->find($id);
    	$form = $this->createForm(new EjemploType(), $prueba);
    	$request = $this->getRequest();
    	$form->handleRequest($request);
    	 
    	if ($form->isSubmitted())
    	{
    		if ($form->isValid())
    		{
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($prueba);
    			$em->flush();
    			return $this->redirect($this->generateUrl('prueba_edit',array('id'=>$id),301));
    		}
    	}
    	//return $this->redirect($this->generateUrl('prueba_view',array('id'=>$id),301));
    }
    */
}

// php app/console generate:doctrine:crud --entity=EjemploBundle:Ejemplo --format=yml --with-write
