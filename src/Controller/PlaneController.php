<?php


namespace App\Controller;


use App\Entity\Plane;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlaneController extends AbstractController {

    public function planeList() {
        $planes = $this->getDoctrine()->getRepository(Plane::class)->findAll();
        return $this->json($planes);
    }

    public function getPlane(Plane $id) {
        $plane = $this->getDoctrine()->getRepository(Plane::class)->find($id);
        return $this->json($plane);
    }

    public function deletePlane(Plane $id) {
        $plane = $this->getDoctrine()->getRepository(Plane::class)->find($id);
        $this->getDoctrine()->getManager()->remove($plane);
        $this->getDoctrine()->getManager()->flush();
        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}