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
        $workflowTest->setStartDate(New \DateTime());
        $workflowTest->setEndDate(New \DateTime());

        $manager->persist($workflowTest);
        $manager->flush();
    }
} 