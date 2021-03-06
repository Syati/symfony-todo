<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\TodoType;

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
        $em = $this->getDoctrine()->getManager();
        $todosRepository = $em->getRepository('AppBundle:Todo');

        $todos = $todosRepository->findBy([]);

        return $this->render('Todos/index.html.twig', [
            'todos' => $todos
        ]);
    }

    /**
     * Todos newAction renders a view for creating a todo
     *
     * @param Request $request A Request instance
     *
     * @return Response A Response instance
     *
     * @Route("/new", name="todos_new")
     * @Method("get")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(TodoType::class, new Todo, [
            'action' => $this->generateUrl('todos_create'),
        ]);
        return $this->render('Todos/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Todos createAction creates a new todo
     *
     * @param Request $request A Request instance
     *
     * @return Response A Response instance
     *
     * @Route("/create", name="todos_create")
     * @Method("post")
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(TodoType::class);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            return $this->redirect(
                $this->generateUrl('todos_index')
            );
        }

        return $this->render('Todos/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Todos showAction renders a todo of a id passed
     *
     * @param Request $request A Request instance
     * @param int     $id      A id of todo
     *
     * @return Response A Response instance
     *
     * @Route("/{id}", name="todos_show")
     * @Method("get")
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $todosRepository = $em->getRepository('AppBundle:Todo');

        $todo = $todosRepository->find($id);
        $form = $this->createForm(TodoType::class, $todo);

        return $this->render('Todos/show.html.twig', [
            'form' => $form->createView(),
            'user' => $todo->getUser()
        ]);
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
