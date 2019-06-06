<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 */
class TaskController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route(name="homepage")
     */
    public function number()
    {
        return $this->render('Task/index.html.twig');
    }
}