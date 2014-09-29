<?php


namespace Ger\Bundle\WorkflowBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ger\Bundle\WorkflowBundle\Entity\Workflow;

class LoadWorkflowData implements FixtureInterface {
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $workflowTest = new Workflow();
        $workflowTest->setName("Test1");
        $workflowTest->setStartDate(New \DateTime('now'));
        $workflowTest->setEndDate(New \DateTime('today'));
        $manager->persist($workflowTest);
        $workflowTest2 = new Workflow();
        $workflowTest2->setName("Test2");
        $workflowTest2->setStartDate(New \DateTime('now'));
        $workflowTest2->setEndDate(New \DateTime('today'));
        $manager->persist($workflowTest2);
        $workflowTest3 = new Workflow();
        $workflowTest3->setName("Test3");
        $workflowTest3->setStartDate(New \DateTime('now'));
        $workflowTest3->setEndDate(New \DateTime('today'));
        $manager->persist($workflowTest3);
        $manager->flush();
    }
} 