<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Model\Users;
use UserBundle\Model\userEmail;
use UserBundle\Model\UsersQuery;
use UserBundle\Form\Type\UsersType;

class UserController extends Controller {

    public function indexAction() {
        $userList = UsersQuery::create()->find();
        return $this->render('UserBundle:Default:index.html.twig', array(
                    'usersList' => $userList,
        ));
    }

    public function newAction() {

        $users = new Users();
        $userEmail = new userEmail();
        $form = $this->createForm(new UsersType(), $users);
//	
        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {


            $form->handleRequest($request);

            if ($form->isValid()) {
               
                $users->save();
 
            }
        }

        return $this->render('UserBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    
    public function editAction($id) {
        
        $userList = UsersQuery::create()->findPK($id);
        
        $form = $this->createForm(new UsersType(), $userList);
        
        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {


            $form->handleRequest($request);

            if ($form->isValid()) {

                $userList->save();

                return $this->redirect($this->generateUrl('user_listpage'));
            }
        }
        
        return $this->render('UserBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
