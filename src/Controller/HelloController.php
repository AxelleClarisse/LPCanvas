<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController {

    function helloAction() {
        $response = new JsonResponse([ 'prenom' => 'toto']);

        return $response;
    }

    function numberAction(int $number) {
//        if (is_numeric($number))
            $response = new JsonResponse([ 'number' => $number]);
//        else
//            $response = new JsonResponse([ 'number' => '42']);
        return $response;
    }

    function putAction() {
        $response = new JsonResponse([ 'prenom' => 'toto',  'prenom2' => 'titi', 'prenom3' => 'tata']);

        return $response;
    }
}