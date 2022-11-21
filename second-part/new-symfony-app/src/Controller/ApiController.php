<?php

namespace App\Controller;

use App\Service\HelloReader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends AbstractController
{
    public function hello(Request $request, HelloReader $helloReader): Response
    {
        try {
            $message = json_decode($request->getContent(), true)['message'];

            if (null === $message) {
                throw new \Exception("Message is not set");
            }

            $hello = $helloReader->getHello($message);

            if (null === $hello) {
                return $this->json([
                    'message' => $message
                ]);
            }

            return $this->json([
                'message' => $hello
            ]);
        } catch(\Throwable $e) {
            return $this->json([
                'errorMessage' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
