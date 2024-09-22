<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route(path:"/service/{name}",name:"home")] 
    public function showService($name):Response{
        // 2,3) return new Response(content: $name);
        return $this->render('service/showService.html.twig', [
            'name' => $name
        ]);
    }
    #[Route(path:"/gotoindex",name :"gotoindex")]
    public function goToIndex(): Response
    {
        // Redirige vers la route de la page d'accueil (HomeController)
        return $this->redirectToRoute('homeSahar');
    }
}
