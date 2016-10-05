<?php

namespace MMI\TVBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlocType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('duration')
            ->add('slot')
            ->add('status')
            ->add('weekNumber')
            ->add('videos')
            ->add('category', EntityType::class,array(
                'class' => 'MMITVBundle:Category',
                'choice_label'=>'name',
                'multiple' => 'false',
                'expanded' => 'false',
            ))
            ->add('grid')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MMI\TVBundle\Entity\Bloc'
        ));
    }
}
