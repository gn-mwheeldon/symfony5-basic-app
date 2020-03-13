<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     *
     * @Route("/questions/{question}")
     */
    public function show($question)
    {
        return new Response(str_replace('-', ' ', ucwords($question))."?");
    }
}