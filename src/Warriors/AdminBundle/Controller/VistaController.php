<?php

namespace Warriors\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VistaController extends Controller
{

	public function menulistaAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $datom = $this->getDoctrine()
                       ->getRepository('AdminBundle:Menu')
                       ->findAll();
        return $this->render('AdminBundle:Admin:menulista.html.twig',compact("datom"));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }
    
    public function submenulistaAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $datosm = $this->getDoctrine()
                       ->getRepository('AdminBundle:Submenu')
                       ->findAll();
        return $this->render('AdminBundle:Admin:submenulista.html.twig',compact("datosm"));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }

    public function submenudetalleAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT m, sm
                FROM AdminBundle:Submenu sm
                JOIN sm.menu m
                WHERE m.id = :id'
            )->setParameter('id',$id);
        $datosm = $query->getArrayResult();
        return $this->render('AdminBundle:Admin:submenudetalle.html.twig',array("datosm"=>$datosm));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }

    public function urllistaAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, u
                FROM AdminBundle:Url u
                JOIN u.submenu sm'
            );
        $datou = $query->getArrayResult();
        return $this->render('AdminBundle:Admin:urllista.html.twig',array("datou"=>$datou));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }
    
    public function urldetalleAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, m
                FROM AdminBundle:Submenu sm
                JOIN sm.menu m
                WHERE m.id = :id'
            )->setParameter('id',$id);
          $datosm = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:urldetalle.html.twig',array('datosm'=>$datosm));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

    public function urltablaAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, u
                FROM AdminBundle:Url u
                JOIN u.submenu sm
                WHERE sm.id = :id'
            )->setParameter('id',$id);
          $datou = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:urltabla.html.twig',array('datou'=>$datou));
         }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }

    public function wdfimAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        return $this->render('AdminBundle:Admin:wdfim.html.twig');
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }

    public function wdfimselectAction($id,Request $request)
    {
         $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, m
                FROM AdminBundle:Submenu sm
                JOIN sm.menu m
                WHERE m.id = :id'
            )->setParameter('id',$id);
          $datosm = $query->getArrayResult();


        return $this->render('AdminBundle:Admin:wdfimselect.html.twig',array('datosm'=>$datosm, 'men'=>$id));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

    public function wdfimtablaAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, u
                FROM AdminBundle:Url u
                JOIN u.submenu sm
                WHERE sm.id = :id'
            )->setParameter('id',$id);
          $datou = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:wdfimtabla.html.twig',array('datou'=>$datou));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

    public function wdfirAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
          return $this->render('AdminBundle:Admin:wdfir.html.twig');
           }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }
    
      public function wdfirselectAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, m
                FROM AdminBundle:Submenu sm
                JOIN sm.menu m
                WHERE m.id = :id'
            )->setParameter('id',$id);
          $datosm = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:wdfirselect.html.twig',array('datosm'=>$datosm, 'men'=>$id));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

     public function wdfirtablaAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, u
                FROM AdminBundle:Url u
                JOIN u.submenu sm
                WHERE sm.id = :id'
            )->setParameter('id',$id);
          $datou = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:wdfirtabla.html.twig',array('datou'=>$datou));
         }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

    public function wdintAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
          return $this->render('AdminBundle:Admin:wdint.html.twig');
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }
    }
    
      public function wdintselectAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, m
                FROM AdminBundle:Submenu sm
                JOIN sm.menu m
                WHERE m.id = :id'
            )->setParameter('id',$id);
          $datosm = $query->getArrayResult();


        return $this->render('AdminBundle:Admin:wdintselect.html.twig',array('datosm'=>$datosm, 'men'=>$id));
        }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

     public function wdinttablaAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $em = $this->getDoctrine()->getManager();
         $query =$em->createQuery(
             'SELECT sm, u
                FROM AdminBundle:Url u
                JOIN u.submenu sm
                WHERE sm.id = :id'
            )->setParameter('id',$id);
          $datou = $query->getArrayResult();

        return $this->render('AdminBundle:Admin:wdinttabla.html.twig',array('datou'=>$datou));
         }
        else
         {
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Debe estar logueado para ver este contenido'
                            );
                    return $this->redirect($this->generateUrl('admin_index'));
         }

    }

}
