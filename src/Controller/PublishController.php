<?php

namespace App\Controller;

use Symfony\Component\Mercure\Update;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PublishController extends AbstractController
{
    /**
     * @Route("/push", name="publish")
     */
    public function push(Request $request,HubInterface $hub) {
        //Create a new update with tht topic and the data
        // Topic = "push"
        $update = new Update( 
            'push',
            json_encode(['type' => 'update', 'message' => 'JE SUIS UN PUSH'])
        );
        //Publish the update to the hub
         $hub->publish($update);
    
        return $this->json(['message' => 'ok'],200);
    }

}
