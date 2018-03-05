<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
  /**
   * @Route("/show/{genusName}")
   */
  public function showAction($genusName) {
    $notes = [
    'Octopus asked me a riddle, outsmarted me',
    'I counted 8 legs... as they wrapped around me',
    'Inked!'
    ];

    return $this->render('genus/show.html.twig', array(
      'name' => $genusName,
      'notes' => $notes
    ));
  }
}
