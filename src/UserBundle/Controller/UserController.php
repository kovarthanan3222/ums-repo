<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Model\Users;
use UserBundle\Model\userEmail;
use UserBundle\Model\UsersQuery;
use UserBundle\Form\Type\UsersType;

class UserController extends Controller {

    public function indexAction($pageId) {

        $userList = UsersQuery::create()->paginate($pageId, $maxPerPage = 2);
        
        
        return $this->render('UserBundle:Default:index.html.twig', array(
                    'usersList' => $userList, 'pageId' => $pageId
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
                
                
                
                return $this->redirect($this->generateUrl('user_listpage',array('pageId' =>1)));
 
            }
        }

        return $this->render('UserBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    
    public function editAction($id) {
        
        $editUser = UsersQuery::create()->findPK($id);
        
        $form = $this->createForm(new UsersType(), $editUser);
        
        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {


            $form->handleRequest($request);

            if ($form->isValid()) {

                $editUser->save();

                return $this->redirect($this->generateUrl('user_listpage',array('pageId' =>1)));
            }
        }
        
        return $this->render('UserBundle:Default:edit.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    public function viewAction($id) {
        
        $userDetails = UsersQuery::create()->findPK($id);
        
       
        
        return $this->render('UserBundle:Default:view.html.twig', array(
                    'userDetails' => $userDetails,
        ));
    }

}
