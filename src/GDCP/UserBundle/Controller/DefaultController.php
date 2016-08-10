<?php

namespace GDCP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GDCPUserBundle:Default:index.html.twig');
    }
}
