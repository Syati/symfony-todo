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
        for ($i = 0; $i <= 10; $i++) {
            $todo = new Todo();
            $todo->setName("Symfony ${i}");
            $todo->setDescription("Understand Symfony framework ${i}");
            $manager->persist($todo);
            $manager->flush();
        }
    }
}
