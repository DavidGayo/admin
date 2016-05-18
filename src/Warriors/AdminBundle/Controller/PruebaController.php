<?php

namespace Warriors\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PruebaController extends Controller
{
    
    public function pruebaAction()
    {
       return $this->render('AdminBundle:Admin:prueba.html.twig');  
    }

    public function jsonAction()
    {
         $datou = $this->getDoctrine()
                       ->getRepository('AdminBundle:Url')
                       ->findAll();
       return $this->render('AdminBundle:Admin:prueba.html.twig');  
    }    

   


}
