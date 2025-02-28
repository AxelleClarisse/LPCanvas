<?php


namespace App\Controller;


use App\Entity\Pilot;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PilotController extends AbstractController {

    public function pilotList() {
        $pilots = $this->getDoctrine()->getRepository(Pilot::class)->findAll();
        return $this->json($pilots);
    }

    public function getPilot(int $id) {
        $pilot = $this->getDoctrine()->getRepository(Pilot::class)->find($id);
        return $this->json($pilot);
    }

    public function deletePilot(int $id) {
        $pilot = $this->getDoctrine()->getRepository(Pilot::class)->find($id);
        $this->getDoctrine()->getManager()->remove($pilot);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}