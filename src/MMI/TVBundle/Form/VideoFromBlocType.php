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

class VideoFromBlocType extends AbstractType
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


        $builder
            ->add('title', TextType::class, array('label'=>'Titre'))
            ->add('url', TextType::class, array('label'=>'Lien URL'))
            ->add('duration', TimeType::class, array('label'=>'Durée', 'with_seconds'=>true))
            ->add('description', TextareaType::class)
            ->add('date')
            ->add('poster', TextType::class, array('label'=>'Image'))
            ->add('category', EntityType::class,array(
                'class' => 'MMITVBundle:Category',
                'choices'=>$options['category'],
                'choice_label'=>'name',
                'multiple' => false,
                'expanded' => false,
                'label'=>'Catégorie',
            ))
            ->add('user', EntityType::class,array(
                'class' => 'MMITVBundle:User',
                'choices'=>$options['user'],
                'choice_label'=>'firstName',
                'multiple' => false,
                'expanded' => false,
                'label'=>'Auteur',

            ))
            ->add('blocs', EntityType::class,array(
                'class' => 'MMITVBundle:Bloc',
                //'query_builder' => function(BlocRepository $br) use ($options){
                  // return $br->createQueryBuilder('b')
                   //    ->where('b.grid=:grid')
                    //   ->setParameter('grid',$options['grid'])
                   //;
                //},
                'choice_label'=>'slot',
                'choices' =>$options['bloc'],
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
            'bloc'=>0,
            'user'=>0,
            'category'=>0,
        ));
    }
}
