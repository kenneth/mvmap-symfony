<?php

namespace Mvmap\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MvmapBlogBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction($name)
    {
        return $this->render('MvmapBlogBundle:Default:test.html.twig', array('name' => $name));
    }
    
    public function helloAction()
    {
        return new Response('Hello world!');
    }
}
