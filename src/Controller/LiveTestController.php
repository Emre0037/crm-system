<?php

namespace App\Controller;

use App\Entity\Food;
use App\Repository\FoodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsLiveComponent('LiveTestPage')]
/**
 * @Route("/live", name="testlivepage" , methods={"GET"})
 */
class LiveTestController extends AbstractController
{
    use DefaultActionTrait;

    #[LiveProp]
    public $food = 'aardappel';

    
    #[LiveProp]
    public bool $hasVoted = false;


    #[LiveAction]
        /**
 * @Route("/", name="livepage" , methods={"GET"})
 */
    public function vote()
    {
   

            return $this->render('LiveTestPage.html.twig');
       
    }

}