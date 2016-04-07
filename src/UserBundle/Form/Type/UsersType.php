<?php

namespace UserBundle\Form\Type;

//use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
//    protected $options = array(
//        'data_class' => 'UserBundle\Model\Users',
//        'name'       => 'users',
//    );

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('schoolName');
        $builder->add('collegeName');
        $builder->add('bloodGroup');
        $builder->add('gender');
        $builder->add('dateOfBirth');
//	$builder->add('userdetails','collection', array('type' =>  new UserdetailsType(),'by_reference' => false));

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
