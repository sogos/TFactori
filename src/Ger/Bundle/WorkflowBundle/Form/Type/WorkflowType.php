<?php

namespace Ger\Bundle\WorkflowBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkflowType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array(
            'description' => 'Name of the Workflow'
        ));
        $builder->add('start_date', null, array(
            'widget' => 'single_text',
            'input' => 'datetime',
            'description' => 'Start Date of the Workflow',
            'format' => 'dd-MM-yyyy HH:mm:ssZ'
        ));
        $builder->add('end_date', null, array(
            'widget' => 'single_text',
            'input' => 'datetime',
            'description' => 'End Date of the Workflow',
            'format' => 'dd-MM-yyyy HH:mm:ssZ'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ger\Bundle\WorkflowBundle\Entity\Workflow',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ger_workflow';
    }

} 