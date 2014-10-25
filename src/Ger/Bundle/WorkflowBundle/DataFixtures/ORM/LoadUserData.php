<?php


namespace Ger\Bundle\WorkflowBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ger\Bundle\WorkflowBundle\Entity\User;

class LoadUserData implements FixtureInterface {
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $adminUser = new User();
        $adminUser->setUsername('admin');
        $adminUser->setPlainPassword('kitten');
        $adminUser->setSuperAdmin(true);
        $adminUser->setEmail('test@test.fr');
        $adminUser->setEnabled(true);
        $manager->persist($adminUser);
        $manager->flush();
    }
}