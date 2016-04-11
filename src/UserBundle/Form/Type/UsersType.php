<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UsersType extends AbstractType
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
        $builder->add('userEmails', 'collection', array('type' => new userEmailType(),
        'allow_add' =>true,
        'allow_delete'=>true));
        $builder->add('userMobiles', 'collection', array('type' => new userMobileType(),
        'allow_add' =>true,
        'allow_delete'=>true));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'UserBundle\Model\users'
        ));
    }
//
    public function getName()
    {
        return 'users';
    }
}
