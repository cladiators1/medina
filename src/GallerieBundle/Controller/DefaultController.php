<?php

namespace GallerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GallerieBundle:Default:index.html.twig');
    }
}
