<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
    * @ORM\OneToMany(targetEntity="Todo", mappedBy="user")
    */
    private $todos;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->todos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add todo
     *
     * @param \AppBundle\Entity\Todo $todo
     *
     * @return User
     */
    public function addTodo(\AppBundle\Entity\Todo $todo)
    {
        $this->todos[] = $todo;

        return $this;
    }

    /**
     * Remove todo
     *
     * @param \AppBundle\Entity\Todo $todo
     */
    public function removeTodo(\AppBundle\Entity\Todo $todo)
    {
        $this->todos->removeElement($todo);
    }

    /**
     * Get todos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTodos()
    {
        return $this->todos;
    }
}
