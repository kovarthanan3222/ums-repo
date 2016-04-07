<?php

namespace UserBundle\Form\Type;

//use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserdetailsType extends AbstractType
{
//    protected $options = array(
//        'data_class' => 'UserBundle\Model\Userdetails',
//        'name'       => 'userdetails',
//    );

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userId');
        $builder->add('emailId');
        $builder->add('mobileNo');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Model\Userdetails',
        ));
    }

    public function getName()
    {
        return 'userdetails';
    }
}
