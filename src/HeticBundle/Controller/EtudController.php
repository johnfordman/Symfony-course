<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class EtudController extends Controller
{
    /**
     * @Route("/home")
     */

    public function homeAction()
    {
        //$userRepo = $this->getDoctrine()->getRepository('HeticBundle:Etud');

        return $this->render('HeticBundle:Etud:home.html.twig', array(
        ));
    }

}
