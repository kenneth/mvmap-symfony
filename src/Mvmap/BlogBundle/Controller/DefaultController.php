<?php

namespace Mvmap\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MvmapBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
