<?php

namespace MMI\TVBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Entity\Category;
use MMI\TVBundle\Entity\Grid;

class BlocFixtures extends AbstractFixture
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $this->loadGrids($manager);
        $this->loadCategories($manager);
        $this->loadBlocs($manager);
    }

    public function loadGrids(ObjectManager $manager)
    {
        $grid = new Grid();
        $grid->setWeek('1');
        $grid->setStatus('0');
        $this->setReference(1,$grid);
        $manager->persist($grid);
        $manager->flush();
    }

    public function loadCategories(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'Administration',
            'Techno',
            'Ateliers',
            'Actus/culture',
            'After MMI',
            'Techno',
            'Visuel',
            'Divertissement',
        );

        foreach ($names as $name)
        {
            // On crée la catégorie
            $category = new Category();
            $category->setName($name);
            $this->setReference($name,$category);

            // On la persiste
            $manager->persist($category);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }

    public function loadBlocs(ObjectManager $manager)
    {
        // Semaine 1

        // Lundi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        // Mardi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        // Mercredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('3');;
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();


        // Jeudi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        // Vendredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

    }
}