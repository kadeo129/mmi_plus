<?php

namespace MMI\TVBundle\MMIRenew;

use MMI\TVBundle\Entity\Bloc as Bloc;
use MMI\TVBundle\Entity\Grid as Grid;
use Doctrine\ORM\EntityManager;

class MMIRenew
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEm()
    {
        return $this->em;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

    public function calculAge(Bloc $bloc)
    {
        $tz  = new \DateTimeZone('Europe/Paris');
        $age = \DateTime::createFromFormat('Y-m-d H:i:s', $advert->getDate()->format('Y-m-d H:i:s'), $tz)->diff(new \DateTime('now', $tz))->days;
        return $age;
        //var_dump($advert->getDate()->format('Y-m-d H:i:s'));
    }

    public function renew($weeknumber)
    {
        $em = $this->getEm();
        $adverts=$em->getRepository('OCPlatformBundle:Advert')
            ->findByNbApplications(0);
        foreach($adverts as $advert)
        {
            $age = $this->calculAge($advert);
            if($age > $days)
            {
                $em->remove($advert);
                $em->flush();
            }
        }
    }
}