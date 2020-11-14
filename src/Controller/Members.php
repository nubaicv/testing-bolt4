<?php

// src/Controller/Members.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class Members extends BaseController {
    
    //**
    // * @Route({
    // *     "pt_BR": "/pt_BR/login",
    // *     "en": "/en/login",
    // *     "fr": "/fr/login"
    // * }, name="login")
    // */
    
    /**
     * 
     * @return Response
     * @Route("/login")
     */
    
    public function login(Request $request, Session $session) {
        
        $number = random_int(0, 100);

        return $this->render('login.twig', [
            'number' => $number,
            'request' => $this->request
        ]);
    }
}
