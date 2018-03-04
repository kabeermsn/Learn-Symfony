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
    $templating = $this->container->get('templating');
    $html = $templating->render('genus/show.html.twig', array(
      'name' => $genusName
      ));
    return new Response($html);
  }
}
