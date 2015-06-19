<?php

namespace Reader\Bundle\JiraApiClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ReaderJiraApiClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
