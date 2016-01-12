<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * DefaultController
 *
 * @author mizuki-y <mizuki-y@syati.info>
 */
class DefaultController extends Controller
{
    /**
     * Default indexAction renders a index view
     *
     * @param Request $request A Request instance
     *
     * @return Response A Response instance
     *
     * @Route("/", name="root")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig',
            array(
                'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..')
            )
        );
    }
}
