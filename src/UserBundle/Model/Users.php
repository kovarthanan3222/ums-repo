<?php

namespace UserBundle\Model;

use UserBundle\Model\om\BaseUsers;
use \PropelPDO;

class Users extends BaseUsers
{
    
//    public function preSave(PropelPDO $con = null)
//    {   
//        $userEmail = new userEmail();
//        echo "<pre>";
//        echo $this->getId();
//        print_r($this);
//        echo "</pre>";
//        $userEmail->setUserId($this->getId());
//        
//        return true;
//    }
//    public function postSave(PropelPDO $con = null)
//    {   
//       $userEmail = new userEmail();
//        $userEmail->setUserId($this->getId());
//        echo "<pre>";
//        echo $this->getId();
//        print_r($this);
//        echo "</pre>";
//        return true;
//    }
}
