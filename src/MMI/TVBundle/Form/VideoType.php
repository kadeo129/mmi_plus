<?php

namespace MMI\TVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label'=>'Titre'))
            ->add('url', TextType::class, array('label'=>'Lien URL'))
            ->add('duration', TimeType::class, array('label'=>'Durée', 'with_seconds'=>true))
            ->add('description', TextareaType::class)
            ->add('date')
            ->add('poster', TextType::class, array('label'=>'Image'))
            ->add('category', EntityType::class,array(
                'class' => 'MMITVBundle:Category',
                'choice_label'=>'name',
                'multiple' => false,
                'expanded' => false,
                'label'=>'Catégorie',
            ))
            ->add('blocs', EntityType::class, array(
                'class'        => 'MMITVBundle:Bloc',
                'choice_label' => 'slot',

                'multiple'     => true,
                'expanded' => false,
                'label' => 'Créneau horaire',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MMI\TVBundle\Entity\Video'
        ));
    }
}
