<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * TodosController
 *
 * @Route("/todos")
 *
 * @author mizuki-y <mizuki-y@syati.info>
 */
class TodosController extends Controller
{
    /**
     * Todos indexAction renders a index view
     *
     * @param Request $request A Request instance
     * 
     * @return Response A Response instance
     *
     * @Route("/", name="todos_index")
     * @Method("get")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Todos/index.html.twig');
    }

    /**
     * Todos createAction creates a new todo
     *
     * @param Request $request A Request instance
     * 
     * @return Response A Response instance
     *
     * @Route("/", name="todos_create")
     * @Method("post")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Todos/index.html.twig');
    }
    
    /**
     * Todos showAction renders a todo of a id passed
     *
     * @param Request $request A Request instance
     * 
     * @return Response A Response instance
     *
     * @Route("/{id}", name="todos_show")
     * @Method("get")
     */
    public function showAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Todos/index.html.twig');
    }

    /**
     * Todos updateAction update a todo of a id passed
     *
     * @param Request $request A Request instance
     * 
     * @return Response A Response instance
     *
     * @Route("/{id}", name="todos_update")
     * @Method("put")
     */
    public function updateAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Todos/index.html.twig');
    }

    /**
     * Todos deleteAction delete a todo of a id passed
     *
     * @param Request $request A Request instance
     * 
     * @return Response A Response instance
     *
     * @Route("/{id}", name="todos_delete")
     * @Method("delete")
     */
    public function deleteAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Todos/index.html.twig');
    }    
}