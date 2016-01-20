<?php
namespace AppBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Client;

class LoadClientData implements FixtureInterface,OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $client = new Client();
        $client->setNom('Gérard');
        $client->setPrenom('test');
        $client->setTelephone("0450345678");
        $client->setCodepostal("74000");      
        $client->setRue("74 rue du paradis");
        $client->setVille("Annecy");
        $manager->persist($client);
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}
