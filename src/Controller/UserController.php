<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $user = $form->getData();
            $user->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
            $user->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

            dd($user);
        }

        return $this->render('user/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
