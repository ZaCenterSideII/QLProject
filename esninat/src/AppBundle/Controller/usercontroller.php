<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\user;
use Symfony\Component\HttpFoundation\Response;

class usercontroller extends Controller
{


    /**
     * @Route("/adduser", name="homepage")
     */
    public function indexAction(Request $request)

    { $user = new user();
    $user->setUsername("a");
    $user->setPassword("a");
    $user->setEmail("a");
    $user->setEnabled(true);
    $user->setRole(0);
    $user->setFamilyName("");
    $user->setFirstName("");
    $user->setTel("");
    $time = new \DateTime();
    $time->format('H:i:s \O\n Y-m-d');
    $user->setCreated($time);

    

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($user);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();
        // replace this example code with whatever you need
        return $this->render('adduser.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


  


}
