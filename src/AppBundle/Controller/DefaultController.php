<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Categorie;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function renderQuiz(Request $request)
    {
        $categorie = $this->getDoctrine()->getManager()
        ->getRepository(Categorie::class)
        ->findAll();

        return $this->render('default/index.html.twig', array('data' => $categorie));

        if (!$categorie) {
            throw $this->createNotFoundException(
                'No product found for id '.$categorieId
            );
        }
    }

    /**
     * @Route("/create/quiz", name="create")
     */
    public function createQuiz(Request $request)
    {
        return $this->render('default/create.html.twig');
    }
}
