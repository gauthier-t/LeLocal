<?php


namespace App\Controller\Admin;


use App\Entity\Home;
use App\Form\HomeType;
use App\Repository\HomeRepository;
use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var HomeRepository
     */
    private $homeRepository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var TeamRepository
     */
    private $temRepository;

    public function __construct(HomeRepository $homeRepository, TeamRepository $teamRepository,  EntityManagerInterface $em)
    {
        $this->homeRepository = $homeRepository;
        $this->temRepository = $teamRepository;
        $this->em = $em;
    }

    /**
     * @return Response
     * @Route("/admin", name="admin.home")
     */
    public function index(){
        $description = $this->homeRepository->find(1);
        $team = $this->temRepository->findAll();
        return $this->render('Admin/home/index.html.twig', [
            'description' => $description,
            'team' => $team
        ]);
    }

    /**
     * @Route("/admin/description/edit/{id}", name="app.description.edit", methods="POST|GET")
     * @param Request $request
     * @param Home $home
     * @return RedirectResponse|Response
     */
    public function edit(Request $request, Home $home){

        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            $this->addFlash('success', 'Description modifiée avec succès');
            return $this->redirectToRoute('admin.home');
        }

        return $this->render('Admin/home/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}