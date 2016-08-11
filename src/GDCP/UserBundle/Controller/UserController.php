<?php

namespace GDCP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
       $db = $this->getDoctrine()->getManager();
       
       $user = $db->getRepository('GDCPUserBundle:User')->findAll();
       
       $res  = 'Lista de usuarios: <br />';
       
       foreach($user as $user)
       {
           
        $res .= 'Usuario: ' . $user->getUserName() . ' - Email: ' . $user->getEmail() . '<br />';       
       
       }
       
       return new Response($res);
    }
    
    public function viewAction($id)
    {
        
        $repository = $this->getDoctrine()->getRepository("GDCPUserBundle:User");
        
        $user = $repository->find($id);
        
        return new Response('Usuario: ' . $user->getUserName(). ' con email: ' . $user->getEmail());
    }
}
