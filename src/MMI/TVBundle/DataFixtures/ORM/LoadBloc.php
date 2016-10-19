<?php

namespace MMI\TVBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Entity\Category;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Entity\Video;

class BlocFixtures extends AbstractFixture
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $this->loadGrids($manager);
        $this->loadCategories($manager);
        $this->loadBlocs($manager);
        $this->loadVideos($manager);
    }

    public function loadGrids(ObjectManager $manager)
    {
        $grid = new Grid();
        $grid->setWeek('1');
        $grid->setStatus('0');
        $this->setReference(1, $grid);
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
            'Visuel',
            'Divertissement',
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $category = new Category();
            $category->setName($name);
            $this->setReference($name, $category);

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
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        // Mardi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        // Mercredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('3');;
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();


        // Jeudi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Visuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Ateliers'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Divertissement'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        // Vendredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Techno'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('2');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('3');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Actus/culture'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('4');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('After MMI'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('5');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Administration'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();
    }

    public function loadVideos(ObjectManager $manager)
    {
        $video = new Video();
        $video->setTitle('Introduction to Networking');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in computer networking. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('https://lh3.googleusercontent.com/gR-4TJrjIhhzkuGimvkYXX-0j53NNC_xmY5_5Ewoo48HwwgVhnV28vV1lNu8e_kTsYejsX3L=s630-fcrop64=1,20161fecdfbcdfc3');
        $video->setCategory($this->getReference('Techno'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Understanding Broadband Technologies');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('https://lh3.googleusercontent.com/gR-4TJrjIhhzkuGimvkYXX-0j53NNC_xmY5_5Ewoo48HwwgVhnV28vV1lNu8e_kTsYejsX3L=s630-fcrop64=1,20161fecdfbcdfc3');
        $video->setCategory($this->getReference('Techno'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('How to Paint Skin Realistically-Remastered');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('https://afremov.com/image.php?type=P&id=17678');
        $video->setCategory($this->getReference('Visuel'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Eva D. (48HFP Paris 2014 - Prix Spécial du Jury)');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://www.informaction.info/sites/default/files/maxresdefault_52.jpg');
        $video->setCategory($this->getReference('Visuel'));
        $manager->persist($video);
        $manager->flush();

    }
}