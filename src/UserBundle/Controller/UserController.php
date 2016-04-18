<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Model\Users;
use UserBundle\Model\userEmail;
use UserBundle\Model\userMobile;
use UserBundle\Model\UsersQuery;
use UserBundle\Form\Type\UsersType;

class UserController extends Controller {

    public function indexAction($pageId) {

        $userList = UsersQuery::create()->paginate($pageId, $maxPerPage = 3);
        
        
        return $this->render('UserBundle:Default:index.html.twig', array(
                    'usersList' => $userList, 'pageId' => $pageId
        ));
    }

    public function newAction() {
       
        $users = new Users();
        $userEmail = new userEmail();
        $userMobile = new userMobile();
         
        $form = $this->createForm(new UsersType(), $users);
//        $users->adduserEmail ( new userEmail () ) ;
//	
//        print_r($_POST);
        $request = $this->getRequest();
        
        if ('POST' === $request->getMethod()) {


            $form->handleRequest($request);
            
//            echo "<pre>";
//            print_r($_POST);
//            echo $_POST["users"]["userEmails"][0]["emailId"];
            if ($form->isValid()) {
//                $users->isNew();
                //$users->preSave();
                
//                $users->setUserId($users->getId());
//                $users->setEmailId($_POST["users"]["userEmails"][0]["emailId"]);
//                $userEmail->setUsers($users);
                //$userEmail->preInsert();
//                $userEmail->setUserId($users->getId());
                $users->save();
                //$userEmail->preSave();
          
                
//                print_r($userEmail);
//                echo ;
//                echo $users->colluserEmails();
//                $userEmail->setEmailId("kovarthanan.murugan@aspiresys.com");
//                $userMobile->setMobileNo("9685741230");
//                $users->setUserEmail($userEmail);
//                $users->setUserMobile($userMobile);
//                $users->save();
//                $userEmail->preSave();
//                 $userEmail->postSave();
//                echo $users->getId();
//                $users->postSave();
                
                
                
                
//                return $this->redirect($this->generateUrl('user_listpage',array('pageId' =>1)));
 
            }
        }

        return $this->render('UserBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    
    public function editAction($id) {
        
        $editUser = UsersQuery::create()->findPK($id);
        
        
//        print_r($emailUser);
        
        $form = $this->createForm(new UsersType(), $editUser);
        
        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {


            $form->handleRequest($request);

            if ($form->isValid()) {
                echo $form["userEmails"]->getData();
//                print_r($form->getData());
                $editUser->save();
                $newUser = UsersQuery::create()->filterByuserEmail($form["userEmails"]->getData());
//                print_r($newUser);

//                return $this->redirect($this->generateUrl('user_listpage',array('pageId' =>1)));
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
