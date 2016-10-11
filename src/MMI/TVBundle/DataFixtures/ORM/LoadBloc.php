<?php

namespace MMI\TVBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Entity\Category;
use Symfony\Component\Validator\Tests\Constraints\CallbackValidatorTest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoadBloc implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $blocs = array(
            $bloc1=array(
                'duration'=>'01:30:00',
                'slot'=>'1',
                'week_number'=>'1',
                'category'=>'Administration'
            ),
            $bloc2=array(
                'duration'=>'01:30:00',
                'slot'=>'2',
                'week_number'=>'1',
                'category'=>'Techno'
            ),
            $bloc3=array(
                'duration'=>'01:30:00',
                'slot'=>'3',
                'week_number'=>'1',
                'category'=>'Ateliers'
            ),
            $bloc4=array(
                'duration'=>'01:30:00',
                'slot'=>'4',
                'week_number'=>'1',
                'category'=>'Actus/culture'
            ),
            $bloc5=array(
                'duration'=>'01:30:00',
                'slot'=>'2',
                'week_number'=>'1',
                'category'=>'Techno'
            ),
            $bloc6=array(
                'duration'=>'01:30:00',
                'slot'=>'3',
                'week_number'=>'1',
                'category'=>'Ateliers'
            ),
        );

        foreach ($blocs as $bloc=>$data) {
            // On crée la catégorie
            $bloc = new Bloc();
            $bloc->setDuration($data['duration']);
            $bloc->setSlot($data['slot']);
            $bloc->setWeekNumber($data['week_number']);
            $bloc->setCategory($data['category']);

            // On la persiste
            $manager->persist($bloc);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}