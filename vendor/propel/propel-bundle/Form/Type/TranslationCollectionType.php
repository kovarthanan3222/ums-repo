<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Propel\Bundle\PropelBundle\Form\Type;

use Propel\Bundle\PropelBundle\Form\EventListener\TranslationCollectionFormListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * form type for i18n-columns in propel.
 *
 * @author Patrick Kaufmann
 */
class TranslationCollectionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (!isset($options['options']['data_class']) || null === $options['options']['data_class']) {
            throw new MissingOptionsException('data_class must be set');
        }
        if (!isset($options['options']['columns']) || null === $options['options']['columns']) {
            throw new MissingOptionsException('columns must be set');
        }

        $listener = new TranslationCollectionFormListener($options['languages'], $options['options']['data_class']);
        $builder->addEventSubscriber($listener);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'collection';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'propel1_translation_collection';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(array(
            'languages',
        ));

        $resolver->setDefaults(array(
            'type' => 'propel1_translation',
            'allow_add' => false,
            'allow_delete' => false,
            'options' => array(
                'data_class' => null,
                'columns' => null,
            ),
        ));
    }
}
