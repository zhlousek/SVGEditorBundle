<?php

namespace Tangara\SVGEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TangaraSVGEditorBundle:Default:index.html.twig', array('name' => $name));
    }
}
