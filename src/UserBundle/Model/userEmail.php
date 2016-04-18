<?php

namespace UserBundle\Model;

use UserBundle\Model\om\BaseuserEmail;
use \PropelPDO;

class userEmail extends BaseuserEmail
{
    public function preSave(PropelPDO $con = null)
    {   
//        echo "sdfsdfd";
//        echo "<pre>";
//        print_r($this);
//        $this->setUserId($this->getId());
//        echo $this->getId();
//        print_r($this);
//        echo "</pre>";
        
        return true;
    }
//    public function postSave(PropelPDO $con = null)
//    {   
//        echo "<pre>";
//        echo $this->getId();
//        print_r($this);
//        echo "</pre>";
//        return true;
//    }
//    public function preInsert(PropelPDO $con = null)
//    {   
//        echo "<pre>";
//        echo $this->getId();
//        print_r($this);
//        echo "</pre>";
//        return true;
//    }
}
