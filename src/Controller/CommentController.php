<?php

namespace App\Controller;

use App\Entity\Comment;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
    /**
     *  @Route("/comments")
     */
    public function comments()
    {
        $comments = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findAll();

        return $this->render('comments/index.html.twig', [
            'comments' => $comments,
        ]);
    }

    /**
     *  @Route("/")
     */
    public function home()
    {
        return $this->render('home/index.html.twig');
    }

    // /**
    //  *  @Route("/comment/save")
    //  */
    // public function save()
    // {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     $comment = new Comment();
    //     $comment->setName('Pierre');
    //     $comment->setTitle('Efficace et élégant');
    //     $comment->setContent(
    //         "Superbe expérience avec Izidore, qui a meublé avec goût l'intégralité de mon appartement T3 ! Délais respectés, meubles assortis, modernes et en très bon état. Aucune mauvaise surprise, et Ilef est d'une grande gentillesse et réactivité sans faille. J'hésiterai pas une seconde à faire à nouveau appel à vous pour de futurs projets."
    //     );

    //     $entityManager->persist($comment);
    //     $entityManager->flush();

    //     return new Response(
    //         'saves an article with the id of ' . $comment->getId()
    //     );
    // }
}
