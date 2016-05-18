<?php

namespace Warriors\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Warriors\AdminBundle\Entity\Menu;
use Warriors\AdminBundle\Form\MenuType;
use Warriors\AdminBundle\Entity\Submenu;
use Warriors\AdminBundle\Form\SubmenuType;
use Warriors\AdminBundle\Entity\Url;
use Warriors\AdminBundle\Form\UrlType;


class WarriorsController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->getMethod()=="POST")
        {
            $nombre=$request->get("nombre");
            $password=$request->get("password");

            $user=$this->getDoctrine()->getRepository('AdminBundle:Usuarios')->findOneBy(array("nombre"=>$nombre,"password"=>$password));
            if  ($user)
            {
                 $session=$request->getSession();
                 $session->set("id",$user->getId());
                 $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Bienvenido al administrador de Warriors Defender'
                            );
                return $this->redirect($this->generateUrl('admin_homepage'));
            }
            else
            {
                $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Usuario o/y contraseña son incorectos'
                            );
            return $this->redirect($this->generateUrl('admin_index'));
            }
        }
        return $this->render('AdminBundle:Admin:index.html.twig');
    }
    
    public function salirAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('admin_index'));
    }

    public function homeAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        return $this->render('AdminBundle:Admin:home.html.twig');
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

    public function menuaddAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
         $m=new Menu();
         $form=$this->createForm(new MenuType(),$m);
          $form->handleRequest($request);
         if($form->isValid())
         {
            $em=$this->getDoctrine()->getManager();
            $em->persist($m);
            $em->flush();
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha agregado el menú exitosamente'
                            );
            return $this->redirect($this->generateUrl('admin_menuadd'));
         }
        return $this->render('AdminBundle:Admin:menuadd.html.twig',array("form"=>$form->createView()));
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

     public function menueditAction($id,Request $request)
    {
          $session=$request->getSession();
          if($session->has("id"))
           {
            $m=new Menu();
            
            $datom=$this->getDoctrine()
                ->getRepository('AdminBundle:Menu')
                ->find($id);
                 if (!$datom) 
                {
                    throw $this->createNotFoundException(
                    'No existe el menú'.$id
                     );
                }
            
            
            $form=$this->createForm(new MenuType(),$datom);
              $form->handleRequest($request);
            
                if ($form->isValid()) 
                {
                    $em=$this->getDoctrine()->getManager();
                    $em->flush();
                     $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha editado el registro exitosamente'
                            );
                    return $this->redirect($this->generateUrl('admin_menulista'));
                }
            
            return $this->render('AdminBundle:Admin:menuedit.html.twig',array("form"=>$form->createView()));
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

     public function menudeleteAction($id, Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('AdminBundle:Menu')->find($id);
     
        if (!$menu) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
     
        $em->remove($menu);
        $em->flush();
         $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        return $this->redirect($this->generateUrl('admin_menulista'));
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

    public function submenuaddAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $sm=new Submenu();
         $form=$this->createForm(new SubmenuType(),$sm);
          $form->handleRequest($request);
         if($form->isValid())
         {
            $em=$this->getDoctrine()->getManager();
            $em->persist($sm);
            $em->flush();
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha agregado el Submenú exitosamente'
                            );
            return $this->redirect($this->generateUrl('admin_submenuadd'));
         }
        return $this->render('AdminBundle:Admin:submenuadd.html.twig',array("form"=>$form->createView()));
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

     public function submenueditAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            $sm=new Submenu();
            
            $datosm=$this->getDoctrine()
                ->getRepository('AdminBundle:Submenu')
                ->find($id);
                 if (!$datosm) 
                {
                    throw $this->createNotFoundException(
                    'No existe el submenú'.$id
                     );
                }
            
            
            $form=$this->createForm(new SubmenuType(),$datosm);
              $form->handleRequest($request);
            
                if ($form->isValid()) 
                {
                    $em=$this->getDoctrine()->getManager();
                    $em->flush();
                     $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha editado el registro exitosamente'
                            );
                    return $this->redirect($this->generateUrl('admin_submenulista'));
                }
            
            return $this->render('AdminBundle:Admin:submenuedit.html.twig',array("form"=>$form->createView()));
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

    public function submenudeleteAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $em = $this->getDoctrine()->getManager();
        $submenu = $em->getRepository('AdminBundle:Submenu')->find($id);
     
        if (!$submenu) {
            throw $this->createNotFoundException(
                'No existe el Submenú '.$id
            );
        }
     
        $em->remove($submenu);
        $em->flush();
         $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el Submenú exitosamente'
                            );
        return $this->redirect($this->generateUrl('admin_submenulista'));
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

    public function urladdAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $u=new Url();
         $form=$this->createForm(new UrlType(),$u);
          $form->handleRequest($request);
         if($form->isValid())
         {
            $em=$this->getDoctrine()->getManager();
            $em->persist($u);
            $em->flush();
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha agregado el Submenú exitosamente'
                            );
            return $this->redirect($this->generateUrl('admin_urladd'));
         }
        return $this->render('AdminBundle:Admin:urladd.html.twig',array("form"=>$form->createView()));
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

    public function urleditAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            $u=new Url();
            
            $datou=$this->getDoctrine()
                ->getRepository('AdminBundle:Url')
                ->find($id);
                 if (!$datou) 
                {
                    throw $this->createNotFoundException(
                    'No existe la URL'.$id
                     );
                }
            
            
            $form=$this->createForm(new UrlType(),$datou);
              $form->handleRequest($request);
            
                if ($form->isValid()) 
                {
                    $em=$this->getDoctrine()->getManager();
                    $em->flush();
                     $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha editado el registro exitosamente'
                            );
                    return $this->redirect($this->generateUrl('admin_urllista'));
                }
            
            return $this->render('AdminBundle:Admin:urledit.html.twig',array("form"=>$form->createView()));
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

    public function urldeleteAction($id,Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
        $em = $this->getDoctrine()->getManager();
        $url = $em->getRepository('AdminBundle:Url')->find($id);
     
        if (!$url) {
            throw $this->createNotFoundException(
                'No existe la Url '.$id
            );
        }
     
        $em->remove($url);
        $em->flush();
         $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado la URL exitosamente'
                            );
        return $this->redirect($this->generateUrl('admin_urllista'));
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
