<?php

namespace principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('principalBundle:Default:index.html.twig', array('name' => $name));
    }
}
