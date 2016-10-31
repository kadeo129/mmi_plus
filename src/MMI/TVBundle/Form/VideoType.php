<?php

namespace MMI\TVBundle\Form;

use MMI\TVBundle\Repository\BlocRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use MMI\TVBundle\Entity\Bloc;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

//    protected $grid;
//
//    public function __construct($grid)
//    {
//        $this->grid = $grid;
//    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $planning = array();
        $days = array(
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
        );

        $hours = array(
            '8H00 - 9H30'=>'1',
            '9H30 - 11H00'=>'2',
            '11H00 - 12H30'=>'3',
            '12H30 - 14H00'=>'4',
            '14H00 - 15H30'=>'5',
            '15H30 - 17H00'=>'6',
            '17H00 - 18H30'=>'7',
        );

        foreach($days as $day)
        {
            foreach($hours as $hour=>$slot)
           $planning[$day][$hour]=$slot;
        }

        var_dump($planning);

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
            ->add('blocs', EntityType::class,array(
                'class' => 'MMITVBundle:Bloc',
                'query_builder' => function(BlocRepository $br) use ($options){
                   return $br->createQueryBuilder('b')
                       ->where('b.grid=:grid')
                       ->setParameter('grid',$options['grid'])
                   ;
                },
//                'choice_label'=>'id',
                'choices' =>$planning,
                'multiple' => true,
                'expanded' => false,
                'label'=>'Créneau horaire',
            ))

//            ->add('blocs', EntityType::class, array(
//                'class'        => 'MMITVBundle:Bloc',
//                'choices' =>$grid,
//                'choice_label'=>'slot',
//                'multiple'     => true,
//                'expanded' => false,
//                'label' => 'Créneau horaire',
//            ))
//            ->add('blocs', ChoiceType::class, array(
//                'class'=> 'MMITVBundle:Bloc',
//                'choices' =>$planning,
//                'choice_label'=>'slot',
//                'multiple'     => true,
//                'expanded' => false,
//                'label' => 'Créneau horaire',
//            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MMI\TVBundle\Entity\Video',
            'grid' => 0,
        ));
    }
}
