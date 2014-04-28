<?php

namespace Tangara\SVGEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function svgEditorAction()
    {
        return $this->render('TangaraSVGEditorBundle:Default:svg-editor.html.twig');
    }
}
