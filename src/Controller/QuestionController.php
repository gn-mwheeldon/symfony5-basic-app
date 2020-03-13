<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("What a bewitching controller we have conjured!");
    }

    /**
     *
     * @Route("/questions/{question}")
     */
    public function show($question)
    {
        return new Response(str_replace('-', ' ', ucwords($question))."?");
    }
}