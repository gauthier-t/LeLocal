<?php


namespace App\Controller\Admin;


use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var HomeRepository
     */
    private $homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * @param HomeRepository $repository
     * @return Response
     * @Route("/admin")
     */
    public function index(){

        $home = $this->homeRepository->find(1);

        return $this->render('Admin/home/index.html.twig', [
            'home' => $home
        ]);
    }
}