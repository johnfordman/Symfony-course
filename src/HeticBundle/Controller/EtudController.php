<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use HeticBundle\Entity\Etud;
use HeticBundle\Form\StudentTypeType;


class EtudController extends Controller
{
    /**
     * @Route("/home")
     */

    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('HeticBundle:Etud')->findAll();

        $calculate = $this->get('app.calculate');
        $studentAge = [];
        foreach($students as $oneStudent){
            $studentAge[$oneStudent->getId()] = $calculate->calculate($oneStudent->getDateOfBirth());
        }
        return $this->render('HeticBundle:Etud:home.html.twig', array(
            'students' => $students,
            'age' => $studentAge
        ));
    }

}
