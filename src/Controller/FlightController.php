<?php


namespace App\Controller;


use App\Entity\Flight;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FlightController extends AbstractController {

    public function flightList() {
        $flights = $this->getDoctrine()->getRepository(Flight::class)->findAll();
        return $this->json($flights);
    }

    public function getFlight(Flight $id) {
        $flight = $this->getDoctrine()->getRepository(Flight::class)->find($id);
        return $this->json($flight);
    }

    public function deleteFlight(Flight $id) {
        $flight = $this->getDoctrine()->getRepository(Flight::class)->find($id);
        $this->getDoctrine()->getManager()->remove($flight);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}