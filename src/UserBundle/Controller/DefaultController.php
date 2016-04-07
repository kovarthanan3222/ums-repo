<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UserBundle\Model\Users;
use UserBundle\Model\UsersQuery;
use UserBundle\Form\Type\UsersType;


class DefaultController extends Controller
{
    public function indexAction()
    {

	$userList = UsersQuery::create()->find();
        return $this->render('UserBundle:Default:index.html.twig',array(
            'usersList' => $userList,
        ));
    }

    public function adduserAction()
    {

	$users = new Users();
        $form = $this->createForm(new UsersType(), $users);
//	
	$request = $this->getRequest();
	if ('POST' === $request->getMethod()) {
           
            
            $form->handleRequest($request);
             
            if ($form->isValid()) {
               
                $users->save();

                return $this->redirect($this->generateUrl('user_adduser'));
            }
        }

        return $this->render('UserBundle:Default:addUser.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}
