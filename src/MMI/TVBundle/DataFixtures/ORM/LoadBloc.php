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
        $manager->persist($grid);
        $this->setReference(1, $grid);
        $manager->flush();

    }

    public function loadCategories(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'Graphisme',
            'Techno',
            'Ateliers',
            'Actus/culture',
            'After MMI',
            'Audiovisuel',
            'Divertissement',
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $category = new Category();
            $category->setName($name);
            switch($name)
            {
                case 'Graphisme':
                    $category->setClass('graph');
                    break;
                case 'Techno':
                    $category->setClass('techno');
                    break;
                case 'Ateliers':
                    $category->setClass('atelier');
                    break;
                case 'Actus/culture':
                    $category->setClass('actu');
                    break;
                case 'After MMI':
                    $category->setClass('after');
                    break;
                case 'Audiovisuel':
                    $category->setClass('visuel');
                    break;
                case 'Divertissement':
                    $category->setClass('divert');
                    break;
            }

            // On la persiste
            $manager->persist($category);

            $this->setReference($name, $category);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }

    public function loadBlocs(ObjectManager $manager)
    {
        // Semaine 1

        // Lundi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
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
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();

        // Mardi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Audiovisuel'));
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
        $bloc->setCategory($this->getReference('Audiovisuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('2');
        $manager->persist($bloc);
        $manager->flush();

        // Mercredi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
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
        $bloc->setCategory($this->getReference('Audiovisuel'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('7');
        $bloc->setStatus('0');
        $bloc->setDay('3');
        $manager->persist($bloc);
        $manager->flush();


        // Jeudi

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('4');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Audiovisuel'));
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
        $bloc->setCategory($this->getReference('Graphisme'));
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
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('6');
        $bloc->setStatus('0');
        $bloc->setDay('5');
        $manager->persist($bloc);
        $manager->flush();

        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
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
        $video->setPoster('http://195.83.128.55/~mmid215b09/img3.png');
        $video->setCategory($this->getReference('Techno'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Understanding Broadband Technologies');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img4.png');
        $video->setCategory($this->getReference('Techno'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('How to Paint Skin Realistically-Remastered');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img1.png');
        $video->setCategory($this->getReference('Audiovisuel'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Eva D. (48HFP Paris 2014 - Prix Spécial du Jury)');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img2.png');
        $video->setCategory($this->getReference('Audiovisuel'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo Graphisme');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in computer networking. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img3.png');
        $video->setCategory($this->getReference('Graphisme'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo Divertissement');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img4.png');
        $video->setCategory($this->getReference('Divertissement'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo After MMI');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img1.png');
        $video->setCategory($this->getReference('After MMI'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo Ateliers');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img2.png');
        $video->setCategory($this->getReference('Ateliers'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo pour Graphisme');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in computer networking. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img3.png');
        $video->setCategory($this->getReference('Graphisme'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo pour Divertissement');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img4.png');
        $video->setCategory($this->getReference('Divertissement'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo pour After MMI');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img1.png');
        $video->setCategory($this->getReference('After MMI'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Super vidéo Ateliers');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img2.png');
        $video->setCategory($this->getReference('Ateliers'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Super vidéo Graphisme');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in computer networking. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img3.png');
        $video->setCategory($this->getReference('Graphisme'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Super vidéo Divertissement');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img4.png');
        $video->setCategory($this->getReference('Divertissement'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Super vidéo After MMI');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img1.png');
        $video->setCategory($this->getReference('After MMI'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Vidéo Ateliers');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img2.png');
        $video->setCategory($this->getReference('Ateliers'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Graphisme');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in computer networking. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img3.png');
        $video->setCategory($this->getReference('Graphisme'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Divertissement');
        $video->setUrl('https://www.youtube.com/watch?v=-7EpXCnN0lo');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class teaches students about the various types of broadband technologies available to connect homes and businesses to the Internet. We discuss the pros and cons of the different options so that students can make an informed decision about purchasing their Internet service.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img4.png');
        $video->setCategory($this->getReference('Divertissement'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('After MMI');
        $video->setUrl('https://www.youtube.com/watch?v=rL8RSFQG8do&list=PLF360ED1082F6F2A5&index=1');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('This class introduces students to the equipment used in art painting. This class teaches students what each individual piece of equipment does, and how they work together.');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img1.png');
        $video->setCategory($this->getReference('After MMI'));
        $manager->persist($video);
        $manager->flush();

        $video = new Video();
        $video->setTitle('Ateliers');
        $video->setUrl('https://www.youtube.com/watch?v=sStaSlGFDBw');
        $video->setDuration(\DateTime::createFromFormat("H:i:s", "00:05:00"));
        $video->setDescription('Avec : Roxane Bret, Grégoire Hussenot, Ernst Umhauer, Jérémy Bernard, Samuel Giuranna, Bastien Ughetto & Alexandre Prince !');
        $video->setDate(new \DateTime());
        $video->setPoster('http://195.83.128.55/~mmid215b09/img2.png');
        $video->setCategory($this->getReference('Ateliers'));
        $manager->persist($video);
        $manager->flush();

    }
}