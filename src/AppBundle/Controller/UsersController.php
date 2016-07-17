<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\TodoType;

/**
 * UsersController
 *
 * @Route("/users")
 *
 * @author mizuki-y <mizuki-y@syati.info>
 */
class UsersController extends Controller
{
    /**
     * Users indexAction renders a index view
     *
     * @param Request $request A Request instance
     *
     * @return Response A Response instance
     *
     * @Route("/", name="users_index")
     * @Method("get")
     */
    public function indexAction(Request $request)
    {
        $todos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findBy([]);

        return $this->render('Users/index.html.twig', [
            'todos' => $todos
        ]);
    }



    /**
     * Users updateAction update a user of a id passed
     *
     * @param Request $request A Request instance
     *
     * @return Response A Response instance
     *
     * @Route("/{id}", name="users_update")
     * @Method("put")
     */
    public function updateAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Users/update.html.twig');
    }
}
