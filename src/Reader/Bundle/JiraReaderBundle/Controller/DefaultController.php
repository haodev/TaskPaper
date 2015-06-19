<?php

namespace Reader\Bundle\JiraReaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ReaderJiraReaderBundle:Default:index.html.twig', array('name' => $name));
    }
}
