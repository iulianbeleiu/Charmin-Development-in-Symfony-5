<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Hello");
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucfirst(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}