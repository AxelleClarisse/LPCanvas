<?php


namespace App\Controller;


use App\Entity\Airport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AirportController extends AbstractController {

    public function airport() {
        $airport = new Airport();

        return $this->json($airport);
    }

    public function airportList() {
        $airports = $this->getDoctrine()->getRepository(Airport::class)->findAll();
        return $this->json($airports);
    }

    public function getAirport(int $id) {
        $airport = $this->getDoctrine()->getRepository(Airport::class)->find($id);
        return $this->json($airport);
    }

    public function deleteAirport(int $id) {
        $airport = $this->getDoctrine()->getRepository(Airport::class)->find($id);
        $this->getDoctrine()->getManager()->remove($airport);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }



}