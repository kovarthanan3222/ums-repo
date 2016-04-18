<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

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
        $builder->add('gender', 'choice', array(
        'choices' => array(
          'male' => 'Male',
          'female' => 'Female'
        ),
        'multiple' => false,
        'expanded' => true,
        'required' => true,
        'data'     => 'male'
    ));
        $builder->add('dateOfBirth', 'date', array(
    'years' => range(date('Y') - 80, date('Y') - 0)
   ));
//        $builder->add('userEmails', new userEmailType());
//        $builder->add('EmailId');

        $builder->add('userEmails', 'collection', array('type' => new userEmailType(),
            'allow_add' =>true,
            'allow_delete'=>true));
//        $builder->add('userMobiles', 'collection', array('type' => new userMobileType(),
//        'allow_add' =>true,
//        'allow_delete'=>true));
      
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'UserBundle\Model\users'
        ));
    }
////
    public function getName()
    {
        return 'users';
    }
}
