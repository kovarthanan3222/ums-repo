<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class userEmailType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'UserBundle\Model\userEmail',
        'name'       => 'useremail',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userId');
        $builder->add('emailId');
    }
}
