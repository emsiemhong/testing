<?php

namespace ConvertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConvertController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ConvertBundle:Convert:index.html.twig');
    }

    /**
     * @Route("/mandarin-chinese-discount")
     */
    public function mandarinDiscount()
    {
        return $this->render('ConvertBundle:Convert:mandarin.html.twig');
    }

    /**
     * @Route("/calculator")
     */
    public function calculator()
    {
        return $this->render('ConvertBundle:Convert:calator.html.twig');
    }

    /**
     * @Route("/dynamic-shadow")
     */
    public function dynamicShadow()
    {
        return $this->render('ConvertBundle:Convert:shadow.html.twig');
    }

    /**
     * @Route("/sabay-icon")
     */
    public function sabayIcon()
    {
        return $this->render('ConvertBundle:Convert:sabayIcon.html.twig');
    }

    /**
     * @Route("/we-bridge-icon")
     */
    public function webridgeIcon()
    {
        return $this->render('ConvertBundle:Convert:webridgeIcon.html.twig');
    }

    /**
     * @Route("/star")
     */
    public function star()
    {
        return $this->render('ConvertBundle:Convert:star.html.twig');
    }

    /**
     * @Route("/rectangle")
     */
    public function rectangle()
    {
        return $this->render('ConvertBundle:Convert:rectangle.html.twig');
    }
}
