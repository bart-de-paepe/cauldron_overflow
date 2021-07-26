<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage() {
        return new Response('What a bewitching controller');
    }

    /**
     * @Route("/shoes/{slug}")
     * @return Response
     */
    public function show($slug) {

        $answers = [
            'Answer 1',
            'Answer 2',
            'Answer 3'
        ];

        return $this->render('question/show.html.twig', [
                'question' => ucwords(str_replace('-', '', $slug)),
                'answers' => $answers
            ]
        );
    }

}