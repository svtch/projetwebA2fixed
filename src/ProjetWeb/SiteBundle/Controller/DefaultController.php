<?php

namespace ProjetWeb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetWebSiteBundle:Default:index.html.twig');
    }
}
