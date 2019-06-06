<?php


namespace App\Controller;

use App\Repository\TaskRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 */
class TaskController extends AbstractController
{

    /**
     * @param TaskRepository $taskRepository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     *
     * @Route(name="homepage")
     */
    public function index(TaskRepository $taskRepository, Request $request, PaginatorInterface $paginator)
    {
        $allTasksQuery = $taskRepository->findAllByPaginate();
        $tasks = $paginator->paginate(
            $allTasksQuery,
            $request->query->getInt('page', 1),
        3
        );

        return $this->render('Task/index.html.twig', ['tasks' => $tasks]);
    }
}