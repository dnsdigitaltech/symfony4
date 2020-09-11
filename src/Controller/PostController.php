<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

 /**
 * @Route("/post", name="post_")
 */
class PostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create()
    {
        return $this->render('post/create.html.twig');
    }

    /**
     * @Route("/save", name="save")
     */
    public function save(Request $request)
    {
        dd($request->request->all());
    }
}
