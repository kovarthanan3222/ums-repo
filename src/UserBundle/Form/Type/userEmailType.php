<?php

namespace UserBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class userEmailType extends AbstractType
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
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'UserBundle\Model\useremail'
        ));
    }
////
    public function getName()
    {
        return 'useremail';
    }
}
