<?php

namespace Todoran\IoanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TodoranIoanBundle:Default:index.html.twig', array('name' => $name));
    }
}
