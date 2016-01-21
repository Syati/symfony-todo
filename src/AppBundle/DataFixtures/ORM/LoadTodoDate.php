<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Todo;

/**
 * LoadTodoData
 *
 * @author mizuki-y <mizuki-y@syati.info>
 */
class LoadTodoDate implements FixtureInterface
{
    /**
     * Load
     */
    public function load(ObjectManager $manager)
    {
        $todo1 = new Todo();
        $todo1->setName("Programming");
        $todo1->setDescription("Understand Symfony framework");

        $manager->persist($todo1);
        $manager->flush();
    }
}
