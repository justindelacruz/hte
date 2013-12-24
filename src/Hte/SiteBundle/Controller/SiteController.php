<?php

namespace Hte\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('HteSiteBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('HteSiteBundle:Default:about.html.twig');
    }

    public function productSamplesAction()
    {
        return $this->render('HteSiteBundle:Default:product_samples.html.twig');
    }

    public function capabilitiesAction()
    {
        return $this->render('HteSiteBundle:Default:capabilities.html.twig');
    }

    public function contactAction()
    {
        return $this->render('HteSiteBundle:Default:contact.html.twig');
    }
}
