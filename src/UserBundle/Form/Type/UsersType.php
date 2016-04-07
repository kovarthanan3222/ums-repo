<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UsersType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'UserBundle\Model\Users',
        'name'       => 'users',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('schoolName');
        $builder->add('collegeName');
        $builder->add('bloodGroup');
        $builder->add('gender');
        $builder->add('dateOfBirth');
    }
}
