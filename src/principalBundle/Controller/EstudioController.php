<?php

namespace principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EstudioController extends Controller
{
    public function quienessomosAction()
    {
        return new Response('<html><body>Hello !</body></html>');
    }
}
