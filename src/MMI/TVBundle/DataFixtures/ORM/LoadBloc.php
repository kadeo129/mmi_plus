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

        $grid = new Grid();
        $grid->setWeek('2');
        $grid->setStatus('0');
        $this->setReference(2,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('3');
        $grid->setStatus('0');
        $this->setReference(3,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('4');
        $grid->setStatus('0');
        $this->setReference(4,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('5');
        $grid->setStatus('0');
        $this->setReference(5,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('6');
        $grid->setStatus('0');
        $this->setReference(6,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('7');
        $grid->setStatus('0');
        $this->setReference(7,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('8');
        $grid->setStatus('0');
        $this->setReference(8,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('9');
        $grid->setStatus('0');
        $this->setReference(9,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('10');
        $grid->setStatus('0');
        $this->setReference(10,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('11');
        $grid->setStatus('0');
        $this->setReference(11,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('12');
        $grid->setStatus('0');
        $this->setReference(12,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('13');
        $grid->setStatus('0');
        $this->setReference(13,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('14');
        $grid->setStatus('0');
        $this->setReference(14,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('15');
        $grid->setStatus('0');
        $this->setReference(15,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('16');
        $grid->setStatus('0');
        $this->setReference(16,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('17');
        $grid->setStatus('0');
        $this->setReference(17,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('18');
        $grid->setStatus('0');
        $this->setReference(18,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('19');
        $grid->setStatus('0');
        $this->setReference(19,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('20');
        $grid->setStatus('0');
        $this->setReference(20,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('21');
        $grid->setStatus('0');
        $this->setReference(21,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('22');
        $grid->setStatus('0');
        $this->setReference(22,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('23');
        $grid->setStatus('0');
        $this->setReference(23,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('24');
        $grid->setStatus('0');
        $this->setReference(24,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('25');
        $grid->setStatus('0');
        $this->setReference(25,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('26');
        $grid->setStatus('0');
        $this->setReference(26,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('27');
        $grid->setStatus('0');
        $this->setReference(27,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('28');
        $grid->setStatus('0');
        $this->setReference(28,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('29');
        $grid->setStatus('0');
        $this->setReference(29,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('30');
        $grid->setStatus('0');
        $this->setReference(30,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('31');
        $grid->setStatus('0');
        $this->setReference(31,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('32');
        $grid->setStatus('0');
        $this->setReference(32,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('33');
        $grid->setStatus('0');
        $this->setReference(33,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('34');
        $grid->setStatus('0');
        $this->setReference(34,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('35');
        $grid->setStatus('0');
        $this->setReference(35,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('36');
        $grid->setStatus('0');
        $this->setReference(36,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('37');
        $grid->setStatus('0');
        $this->setReference(37,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('38');
        $grid->setStatus('0');
        $this->setReference(38,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('39');
        $grid->setStatus('0');
        $this->setReference(39,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('40');
        $grid->setStatus('0');
        $this->setReference(40,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('41');
        $grid->setStatus('0');
        $this->setReference(41,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('42');
        $grid->setStatus('0');
        $this->setReference(42,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('43');
        $grid->setStatus('0');
        $this->setReference(43,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('44');
        $grid->setStatus('0');
        $this->setReference(44,$grid);
        $manager->persist($grid);
        $manager->flush();

        $grid = new Grid();
        $grid->setWeek('45');
        $grid->setStatus('0');
        $this->setReference(45,$grid);
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
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        // Mardi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('8');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('9');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('10');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('11');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('12');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('13');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('14');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        // Mercredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('15');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('16');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('17');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('18');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('19');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('20');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('21');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();


        // Jeudi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('22');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('23');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('24');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('25');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('26');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('27');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('28');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        // Vendredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('29');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('30');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('31');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('32');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('33');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('34');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s","01:30:00"));
        $bloc->setSlot('35');
        $bloc->setStatus('0');
        $bloc->setWeeknumber('1');
        $manager->persist($bloc);
        $manager->flush();

    }
}