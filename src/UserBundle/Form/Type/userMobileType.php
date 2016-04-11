<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class userMobileType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'UserBundle\Model\userMobile',
        'name'       => 'usermobile',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userId');
        $builder->add('mobileNo');
    }
}
