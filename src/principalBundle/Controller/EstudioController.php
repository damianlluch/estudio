<?php

namespace principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstudioController extends Controller
{
    public function quienessomosAction()
    {
        //return $this->render('principalBundle:Estudio:quienes_somos.html.twig');
        return $this->render('principalBundle:Estudio:index.html.twig');
    }
    public function indexAction()
    {
        return $this->render('principalBundle:Estudio:quienes_somos.html.twig');
        //return $this->render('principalBundle:Estudio:index.html.twig');
    }
}
