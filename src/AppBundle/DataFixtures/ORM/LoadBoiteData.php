<?php
namespace AppBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Client;
use AppBundle\Entity\Boiteoeufs;

class LoadBoiteData implements FixtureInterface,OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $boite = new Boiteoeufs();
        $boite->setDateinstallation(new \DateTime());
        $boite->setCapacite(12);
        $boite->setSeuilmini(6);
        $boite->setIdclient($manager->getRepository("AppBundle:Client")->findOneByNom("Gérard"));

        $manager->persist($boite);
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}
